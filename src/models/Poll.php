<?php

class Poll extends Model
{
    protected $options = [];
    protected $user = [];
    protected $totalVotes = -1;

    protected static $table = 'polls';
    protected static $columns = [
        'id',
        'title',
        'description',
        'user_id',
    ];

    public function user()
    {
        if (!$this->user) {
            $this->user = User::one(["id" => $this->user_id]);
        }

        return $this->user;
    }

    public function options()
    {
        if (!$this->options) {
            $this->options = Option::all(["poll_id" => $this->id]);
        }

        return $this->options;
    }

    public function totalVotes()
    {
        if ($this->totalVotes == -1) {
            $total = 0;
            foreach ($this->options as $option) {
                $total += (int) $option->votes;
            }

            $this->totalVotes = $total;
        }

        return $this->totalVotes;
    }

    public function getChartLabels()
    {
        $arr = [];

        foreach ($this->options() as $option) {
            $arr[urlencode($option->name)] = $option->votes; 
        }

        return $arr;
    }

    public function getChart()
    {
        $labels = $this->getChartLabels();

        $json = [
            'type' => 'bar',
            'data' => [
              'labels' => array_keys($labels),
              'datasets' => [
                  [
                    'backgroundColor' => 'rgba(164, 13, 233, 0.5)',
                    'borderColor' => 'rgb(154, 9, 220)',
                    'borderWidth' => .5,
                    'data' => array_values($labels),
                    'label' => "votos",
                    ],
                ],
            ],
            'options' => [
              'title' => [
                'display' => true,
                'text' => 'Apurações da eleição "' . urlencode($this->title)  . ' "',
              ],
            ],
        ];
        

        return "https://quickchart.io/chart?w=500&h=200&c=" . json_encode($json);
          
    }

}
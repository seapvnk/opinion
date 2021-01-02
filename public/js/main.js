Zepto(() => {
    
    $('a[open-vote]').click(() => {
        $('div[app] form[create]').hide()
        $('div[app] div[vote]').show()
    })

    $('a[open-form]').click(() => {
        $('div[app] form[create]').show()
        $('div[app] div[vote]').hide()
    })

    $('button[add]').click(e => {
        e.preventDefault()

        const last = parseInt(
            $('input[name="option[]"]')
                .last()
                .attr('id')
                .replace('op', '')
        )

        const inputLabel = $("<label />", { text: `Candidato #${last + 1}`, for: `op${last + 1}`} )
        const closeButton = $("<span />", { text :"x" } )
        const input = $("<input />", { id: `op${last + 1}`, name: 'option[]'} )


        $(`#op${last}`).after(inputLabel)
        $(inputLabel).prepend(closeButton)
        $(inputLabel).after(input)

        $(closeButton).click(() => {
            $(inputLabel).remove()
            $(input).remove()
        })
    })
})
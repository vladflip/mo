window.$ = jQuery

header = $ '#header-menu'

header.sticky
	topSpacing: -1

logo = $ '#header-logo'

header.on 'sticky-start', ->
	logo.hide()

header.on 'sticky-end', ->
	logo.show()
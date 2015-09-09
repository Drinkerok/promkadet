window.onload = function(){
	var container = document.getElementById('productions');
	var msnry = new Masonry( container, {
	  // options
	  columnWidth: '.one_production',
	  gutter:20,
	  itemSelector: '.one_production'
	});
}
$(document).ready(function(){
	// AGREGANDO CLASE ACTIVE AL PRIMER ENLACE ====================
	$('.wrap__store-wrapper--category_list--Item[category="All"]').addClass('active');

	// FILTRANDO PRODUCTOS  ============================================

	$('.wrap__store-wrapper--category_list--Item').click(function(){
		var catProduct = $(this).attr('category');
		console.log(catProduct);

		// AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
		$('.wrap__store-wrapper--category_list--Item').removeClass('active');
		$(this).addClass('active');

		// OCULTANDO PRODUCTOS =========================
		$('.wrap__store-wrapper--products-list--item').css('transform', 'scale(0)');
		function hideProduct(){
			$('.wrap__store-wrapper--products-list--item').hide();
		} setTimeout(hideProduct,400);

		// MOSTRANDO PRODUCTOS =========================
		function showProduct(){
			$('.wrap__store-wrapper--products-list--item[category="'+catProduct+'"]').show();
			$('.wrap__store-wrapper--products-list--item[category="'+catProduct+'"]').css('transform', 'scale(1)');
		} setTimeout(showProduct,400);
	});

	// MOSTRANDO TODOS LOS PRODUCTOS =======================

	$('.wrap__store-wrapper--category_list--Item[category="All"]').click(function(){
		function showAll(){
			$('.wrap__store-wrapper--products-list--item').show();
			$('.wrap__store-wrapper--products-list--item').css('transform', 'scale(1)');
		} setTimeout(showAll,400);
	});
});
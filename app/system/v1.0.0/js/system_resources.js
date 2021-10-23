$(document).ready(function(){

	$('.cgg-input-mask-data').mask('00/00/0000', { placeholder: "__/__/____" } );
	$('.cgg-input-mask-data_time').mask('00/00/0000 00:00:00', { placeholder: "__/__/__ 00:00:00" } );
	$('.cgg-input-mask-telephone').mask('0000-0000#', { placeholder: "0000-0000" });
	$('.cgg-input-mask-telephone-ddd').mask('(00) 0000-0000#', { placeholder: "(00) 0000-0000" });
	$('.cgg-input-mask-telephone-us').mask('999-9999', { placeholder: "000-0000" });
	$('.cgg-input-mask-telephone-ddd-us').mask('(999) 999-9999', { placeholder: "(000) 000-0000" });
	$('.cgg-input-mask-money').mask('###.###.##0,00', { placeholder: "0,00", reverse: true });

});


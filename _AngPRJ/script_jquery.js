jQuery(document).ready(function() {
	$('#sel').click(function() {
		$('.header').slideToggle(500);
	});
	$('#page1').click(function() {
		/* Act on the event */
$('.full').slideToggle(100);

	});
		$('#loadtext').click(function(){
			$('#text').load('./text.html',function(){
				alert('WORK!!');
			});
			});
		$('#submit').click(function(){
			
			$.post('check_pass.php',{login:[$('#login').val()]},function(data){
				$('#set').html(data);
			

			})

		})
		$('#insert').click(function() {
			$.post('Insert.php', {login:[$('#login').val()],pass:[$('#pass').val()]}, function(data) {
				$('#set').html(data);

			});
		});
		$('#del').click(function() {
			$.post('Delete.php', {login:[$('#login').val()],pass:[$('#pass').val()]}, function(data) {
				$('#set').html(data);

			});
		});
		$('#upd').click(function() {
			$.post('Update.php', {login:[$('#login').val()],pass:[$('#pass').val()]}, function(data) {
				$('#set').html(data);
			});
		});	
		$('#classIns').click(function() {
			$.post('dataDB.php', {login:[$('#login').val()],pass:[$('#pass').val()]}, function(data) {
				$('#set').html(data);
			});
		});
		$('#submit').click(function() {
		$.post('TEST_COOKIE.php', {login:[$('#login').val()],pass:[$('#pass').val()]}, function(data) {
				$('.text').html(data);
			});
});
			$('#submit1').click(function() {
		$.post('TEST_COOKIE.php', {login:[$('#login').val()],pass:[$('#pass').val()]}, function(data) {
				$('.text').html(data);
			});
});
    
$('#buy').click(function(){
$('.info').slideToggle(600);

});

$('.font').mouseover(function() {
	$('#ch_color').animate({fontSize: "67px"},5);
	
});
$('#vertik').mouseover(function(){
$('#vertik').animate();

});

$('#vertik').click(function(){
	$('#vertik').stop();
});
});

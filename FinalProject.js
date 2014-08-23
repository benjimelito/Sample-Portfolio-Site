// DOM ready
$(function() {
    

//Progress Bar
	
    $(window).scroll(function () {
        var s = $(document).scrollTop(), //method
            d = $(document).height() - $(window).height();          
        $("#progressbar").attr('max', d);
        $("#progressbar").attr('value', s);
     });

//Shadows on hover

    $('#navi ul li, #social').hover (
    	function () {
    		$(this).addClass('shadow');
    	}, function () {
    		$(this).removeClass('shadow');
    	});


	$('#articles ul li').hover (
		function () {
			$(this).addClass('shadowWhite');
		}, function () {
			$(this).removeClass('shadowWhite');
		});

	$('#theInterview').hover (
		function () {
			$('#theInterviewPic').css('visibility', 'visible');
		}, function () {
			$('#theInterviewPic').css('visibility', 'hidden');
		})

	$('#playingCards').hover (
		function () {
			$('#playingCardsPic').css('visibility', 'visible');
		}, function () {
			$('#playingCardsPic').css('visibility', 'hidden');
		})

	$('#strikingItRich').hover (
		function () {
			$('#strikingItRichPic').css('visibility', 'visible');
		}, function () {
			$('#strikingItRichPic').css('visibility', 'hidden');
		})

    $('#sweetSigs').hover (
        function () {
            $('#sweetSigsPic').css('visibility', 'visible');
        }, function () {
            $('#sweetSigsPic').css('visibility', 'hidden');
        })

//Article previews on hover	

    $('li img').on('click',function(){
                var src = $(this).attr('src');
                var img = '<img src="' + src + '" class="img-responsive"/>';
                $('#myModal').modal();
                $('#myModal').on('shown.bs.modal', function(){
                    $('#myModal .modal-body').html(img);
                });
                $('#myModal').on('hidden.bs.modal', function(){
                    $('#myModal .modal-body').html('');
                });
           }); 

//Contact Form

    $('#contactForm').on('submit', function() {
        
        var valid =true;
        
        var name = $('input[name="name"]').val();

        var email = $ ('input[name="email"]').val();

        var comments = $ ('textarea').val();
        
        if (name === '') {
            $('input[name="name"]').addClass("invalid");
            valid =false;
        }

        if (name !== '') {
        	$('input[name="name"]').removeClass("invalid");
        }

        if (email === '') {
            $('input[name="email"]').addClass("invalid");
            valid=false;
        }

        if (email !== '') {
            $('input[name="email"]').removeClass("invalid");
        }

        if (comments === '') {
            $('textarea').addClass("invalid");
            valid=false;
        }

        if (comments !== '') {
            $('textarea').removeClass("invalid");
        }

        return valid;

    });

}); 


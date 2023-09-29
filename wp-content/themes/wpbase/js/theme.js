jQuery(function($){
    
   $('.menu-toggle').click(function(){
      $('body').toggleClass( 'noScroll menuOpen' );  
   });
    
    $('body').on('click', '.faqItem .question', function(){
        
      $(this).siblings('.answerCont').slideToggle('600');
      $(this).parents('.faqItem').toggleClass('isOpen').siblings('.faqItem').removeClass('isOpen').find('.answerCont').slideUp('600');
        
    });
    
   $('.sslider').each(function(){
    
   });

});
window.onload=function(){
    
}

 if(window.location.href=='http://www.sfu.ca/~weibinw/ticketBox/index.php'|| window.location.href=='http://www.sfu.ca/~weibinw/ticketBox/index.php?' || window.location.href=='http://www.sfu.ca/~weibinw/ticketBox/index.php?purchase=Buy+Ticket') {
     window.onload=function(){
      imgSlider();
      comingMenu();
      signIn(); 
       mobileMenu();   
}
}
if(window.location.href== 'http://www.sfu.ca/~weibinw/ticketBox/purchase-payment.php?purchase=Buy+Ticket') {
      window.onload=function(){
      paymentMethod();
      mobileMenu();   
     }
 }    


    function mobileMenu(){
         /*  mobile main nav*/
         var burgerMenu =document.getElementsByClassName("burger-menu")[0];
         var burgerItem=document.getElementsByClassName("burger-menu")[0].getElementsByTagName("div");
         var menuWrapper=document.getElementById("nav-wrapper");         
         var footerWrapper=document.getElementById("mobile-footer").getElementsByClassName("footer-content");
         var footerBurger=document.getElementsByClassName("footer-burger-menu");

         burgerMenu.onclick=function shrinkMenu(){
            if(menuWrapper.id=="nav-wrapper"){
                menuWrapper.id="nav-wrapper-open";
                    burgerItem[0].style.transform="translateY(0.5rem) rotate(45deg)";
                    burgerItem[1].style.opacity="0";
                    burgerItem[2].style.transform="translateY(-0.5rem) rotate(-45deg)";
                }
              else{
                menuWrapper.id="nav-wrapper";
                   burgerItem[0].style.transform="";
                   burgerItem[1].style.opacity="1";
                   burgerItem[2].style.transform="";
            }
         }

       for (var i = 0; i < footerBurger.length; i++) {
               footerBurger[i].onclick=function(){ 
                    if(this.id=="help-menu"){
                       var wrapperHelp=document.getElementById("mobile-footer").getElementsByClassName("footer-content")[0];
                       if(wrapperHelp.style.height=="1.1rem"){
                            wrapperHelp.style.height="8rem";
                            wrapperHelp.style.transition="height 0.8s ease-in-out";
                            this.style.transform="rotate(180deg)";
                       }else{
                         wrapperHelp.style.height="1.1rem";
                         this.style.transform="rotate(0deg)";
                       }
                    }
                    else if(this.id=="link-menu"){
                       var wrapperLink=document.getElementById("mobile-footer").getElementsByClassName("footer-content")[1];
                       if(wrapperLink.style.height=="1.1rem"){
                            wrapperLink.style.height="9.8rem";
                            wrapperLink.style.transition="height 0.8s ease-in-out";
                            this.style.transform="rotate(180deg)"
                       }else{
                         wrapperLink.style.height="1.1rem";
                         this.style.transform="rotate(0deg)";
                       }
                    }

                } 
          }
        }

    function imgSlider(){
        var oCheck=document.getElementsByClassName("image-selector")[0].getElementsByTagName("div");
        var picList=document.getElementsByClassName("image-slider")[0];

        for (var i = 0; i < oCheck.length; i++) {
                oCheck[i].index=i;
                oCheck[i].onclick=function(){
                for (var z = 0; z < oCheck.length; z++) {
                    oCheck[z].className="selector-item";
                }
                this.className="selector-item show";
                picList.style.marginLeft=-100*this.index+"%";
                picList.style.transition="1s ease-in-out";
            }
        } 
     }
     function comingMenu(){
        var oSelected=document.getElementsByClassName("ticket-slider")[0].getElementsByTagName("input");
        var oImages=document.getElementById("event-intro").getElementsByTagName("img");
        var oPoster=document.getElementsByClassName("poster-infor");

        for (var i = 0; i < oSelected.length; i++) {
              
                    oSelected[i].onclick=function(){
                         var cateName=this.value;
                       
                         for (var z = 0; z <  oSelected.length; z++) {
                            oSelected[z].className="";
                         }
                         this.className="button-selected";
                         for (var j = 0; j < oImages.length; j++) {
                             //change image of poster base on user's select.
                             oImages[j].index=j;
                             oImages[j].src="image/"+cateName+j+".jpg";  
                         }

                         for(var t=0;t<oPoster.length;t++){
                            var textList=oPoster[t].getElementsByTagName("div");
                     
                            for(var l=0;l<textList.length;l++){
                             //achange the text content of poster base on user's select.
                                      if(cateName=="MOVIE"){
                                        textList[0].style.display="block";
                                        textList[1].style.display="none";
                                        textList[2].style.display="none";
                                        textList[3].style.display="none";
                                      }
                                     else if(cateName=="CONCERT"){
                                         textList[0].style.display="none";
                                        textList[1].style.display="block";
                                        textList[2].style.display="none";
                                        textList[3].style.display="none";
                                     }  

                                     else if(cateName=="SPORT"){
                                       textList[0].style.display="none";
                                       textList[1].style.display="none";
                                       textList[2].style.display="block";
                                       textList[3].style.display="none";
                                     }   
                                     else if(cateName=="FAMILY"){
                                       textList[0].style.display="none";
                                      textList[1].style.display="none";
                                      textList[2].style.display="none";
                                      textList[3].style.display="block";
                                     }  
                              }
                       }  
              }

          }
      }

      function signIn(){
          var oButton=document.getElementById("button");
          var oCover=document.getElementById("popup-cover");
          var oLoginScreen=document.getElementById("loginScreen");
          var oCancel=document.getElementsByClassName("cancel")[0];
          var oImg=document.getElementsByClassName("signIn-image")[0].getElementsByTagName("img")[0];
          oButton.onclick=function(){
                 oLoginScreen.style.display="block";
                 oCover.style.display="block";
                 oImg.style.animation="movingImg 15s linear infinite";
                 
          }
         
          oCancel.onclick=function(){
                 oLoginScreen.style.display="none";
                 oCover.style.display="none";
          }
      }


      function paymentMethod(){
        var oMethod=document.getElementsByClassName("payment-method")[0].getElementsByTagName("li");
        var formCredit=document.getElementById("credit-card");
        var formPaypal=document.getElementById("paypal");
        var formBitCoin=document.getElementById("bitcoin");
    
         for (var i = 0; i < oMethod.length; i++) {
                    oMethod[i].index=i;
                    oMethod[i].onclick=function(){
                    for (var z = 0; z < oMethod.length; z++) {
                        oMethod[z].className="";
                    }
                    console.log(this.index);
                    this.className="method-selected";
                    if(this.index==0){
                       formCredit.style.display="block";
                       formPaypal.style.display="none";
                       formBitCoin.style.display="none";       
                    }else if(this.index==1){
                       formCredit.style.display="none";
                       formPaypal.style.display="block";
                       formBitCoin.style.display="none";       
                    }else{
                       formCredit.style.display="none";
                       formPaypal.style.display="none";
                       formBitCoin.style.display="block"; 
                    }
                }
            } 
         }

     
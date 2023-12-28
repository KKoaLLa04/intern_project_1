function Inint_AJAX() {
try { return new ActiveXObject("Msxml2.XMLHTTP");  } catch(e) {} //IE
try { return new ActiveXObject("Microsoft.XMLHTTP"); } catch(e) {} //IE
try { return new XMLHttpRequest();          } catch(e) {} //Native Javascript
alert("XMLHttpRequest not supported");
return null;
};
function download(path,val) {
var req = Inint_AJAX();
req.open("GET", path+"download.php?val="+val); //make connection
//req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=iso-8859-1"); // set Header
req.send(null); //send value
req.onreadystatechange = function () {
 if (req.readyState==4) {
      if (req.status==200) {

      }
 }
};

}

// Xu ly hien thi chuong hoc
const moduleObj = document.querySelectorAll('.module');

if(moduleObj !== null){
          moduleObj.forEach(function (e){
               const menuObj = e;
               const menuOpen = e.querySelector('.menu-open');
               const menuClose = e.querySelector('.menu-close');
               if(menuObj!==null){
                    if(menuOpen !== null){
                         menuObj.addEventListener('click', function(event){
                              // event.preventDefault();
                              const menuClose = e.querySelector('.menu-close');
                              
                              if(menuClose !== null){
                                   menuOpen.classList.remove('menu-close');
                                   menuOpen.classList.add('menu-open');
                              }else{
                                   menuOpen.classList.remove('menu-open');
                                   menuOpen.classList.add('menu-close');
                              }

                         })
                    }

                    if(menuClose !== null){
                         menuObj.addEventListener('click', function(event){
                              // event.preventDefault();
                              const menuOpen = e.querySelector('.menu-close');
                              
                              if(menuOpen !== null){
                                   menuClose.classList.remove('menu-close');
                                   menuClose.classList.add('menu-open');
                              }else{
                                   menuClose.classList.remove('menu-open');
                                   menuClose.classList.add('menu-close');
                              }

                         })
                    }
     
               }
          })
}
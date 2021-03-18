function loadXMLSize()
{
if (window.XMLHttpRequest)
  {
 xhttp=new XMLHttpRequest();
 }
else // code for IE5 and IE6
 {
 xhttp=new ActiveXObject("Microsoft.XMLHTTP");
 }
 

xhttp.open("GET","shoes.xml",true);
xhttp.send(null);

 xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
       xmlDoc = xhttp.responseXML;
		x=xmlDoc.documentElement;
	

 
		
		display_size= "";
	
     size_div = document.getElementById("div_size");
     
     shoe_node=xmlDoc.childNodes[0];
	  var y=xmlDoc.getElementsByTagName("Shoe");
     
    


         
	 
       display_size = "<ul>" ;
       display_size = display_size +"<li><a href='cart.html'>"+ y[0].getElementsByTagName("Euro_Sizes")[0].firstChild.nodeValue +"</a></li>";
       display_size = display_size +"</ul>";
     
     
     size_div.innerHTML = display_size;
    document.getElementById("div_size").innerHTML=display_size; 

    
    }
};
}  

function loadXMLDescription()
{
  if (window.XMLHttpRequest)
    {
   xhttp=new XMLHttpRequest();
   }
  else // code for IE5 and IE6
   {
   xhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
   
  
  xhttp.open("GET","shoes.xml",true);
  xhttp.send(null);
  
   xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
         xmlDoc = xhttp.responseXML;
          x=xmlDoc.documentElement;
   
               
                display ="";
                description_div = document.getElementById("pills-description");

                shoe_node=xmlDoc.childNodes[0];
	             var y=xmlDoc.getElementsByTagName("Shoe");
                
                    
                    display ="<p> Item information:"+ y[0].getElementsByTagName("item_information")[0].firstChild.nodeValue +"</p>";
                    display = display + "<p> Shoe Type:"+ y[0].getElementsByTagName("type")[0].firstChild.nodeValue+"</p>";
                    display = display + "<p> Gender :"+ y[0].getElementsByTagName("gender")[0].firstChild.nodeValue + "</p>";
                    display = display + "<p> country of origin :" + y[0].getElementsByTagName("country_of_origin")[0].firstChild.nodeValue + "</p>";
                
                description_div.innverHTML = display;
                document.getElementById("pills-description").innerHTML=display;

}
         };
        }
    
function start(){
    loadXMLSize();
    loadXMLDescription();

}
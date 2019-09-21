function init(){
  readdrink();
  $(".container h1 span.addelement i").click(addelement);
  $(".container .box-item").on("click",".items .update",update);
  $(".container .box-item").on("click",".items .remove",removedrink);
  $(".box-item").on("mouseenter mouseleave",".items",onlement);
}
$(document).ready(init);
function resetbox(){
  $(".box-item").html("");
}
function readdrink(){
  resetbox();
  $.ajax({
    url:'drinks.php',
    method:"GET",
    success:function(data){
      printdrink(data);

    },
    error:function(error){
      alert("error");
      console.log(error);
    }
  })
}
function printdrink(data){
  var obj=$(".container .box-item ");
  var source = $("#item-template").html();
  var template = Handlebars.compile(source);
  for(var i=0;i<data.length;i++){
    var d=data[i];
    var context = {
      id:d.id,
      name:d.name,
      brand:d.brand,
      price:d.price,
      expiry:d.expiry
    };
    var html = template(context);
    obj.append(html);
  }
}
function addelement(){
  var name=prompt("INSERISCI NOME BEVANDA");
  console.log(name);
  var brand=prompt("INSERISCI MARCA BEVANDA");
  console.log(brand);
  var price = prompt("INSERISCI PREZZO BEVANDA");
  console.log(price);
  var newprice =price.replace(",",".");
  console.log(newprice);
  var expiry=prompt("INSERISCI DATA SCADENZA AAAA-MM-DD");
  console.log(expiry);
  $.ajax({
    url:'adddrink.php',
    method:"GET",
    data:{
      name:name,
      brand:brand,
      price:newprice,
      expiry:expiry,
    },
    success:function(data){
      readdrink();
    },
    error:function(error){
      alert("ERRORE");
      console.log(error);
    }
  })
}
function onlement(event){

  if(event.type == 'mouseenter'){

    $(this).addClass('animate');
  }else{
    $(this).removeClass('animate');
  }

}
function update(){
  var id=$(this).parent().attr('data-id');
  var price=prompt("INSERISCI IL NUOVO PREZZO");
  var parseprice=price.replace(",",".");
  $.ajax({
    url:'updatedrink.php',
    method:"GET",
    data:{
      id:id,
      price:parseprice
    },
    success:function(data){
      readdrink();
    },
    error:function(){
      console.log("errore");
    }
  })
}
function removedrink(){
  var id=$(this).parent().attr('data-id');
  $.ajax({
    url:'removedrink.php',
    method:"GET",
    data:{
      id:id
    },
    success:function(data){
      readdrink();
    },
    error:function(){
      alert("errore_remove");
    }
  })
}

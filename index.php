<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <script type="text/javascript">


var dado = Math.floor((Math.random() * 6) + 1);
      var cartera = ParseInt(prompt("Añade saldo a tu cartera"));
      alert("Normas del juego, si sale 4,5,6 gana el casino, si sale 1,2,3 ganas tú. La apuesta del casino es la misma que la tuya. No puedes apostar mas de 50€");
      var dinero = ParseInt(prompt("Introduce tu dinero de juego "));
      var dincasino =  dinero;
      var dineroactual = 50;
      if(cartera < dinero) {
        alert("No puedes usar esa cantidad porque supera tu limite")
      }
      else {
        alert("Tu apuesta es" + " " + dinero + "€" );
         if (dado > 3) {
           (dinero2 = (dinero - dincasino)) ;
            cartera1 = (cartera - (dinero2 + dincasino));


         } else if (dado < 4) {
           (dinero2 = (dinero  + dincasino)) ;
            cartera1 =  (cartera  + (dinero2 - dincasino));


         };

         alert("Salio" + " " + dado);

         alert("Tu dinero actual es " + dinero2 + "€" );
          alert("tu dinero en la cartera es de " + cartera1 + "€");
             var dinero3=dinero2;

      }
      //Ronda dos
             var si = prompt("Deseas repetir la jugada. Por favor utiliza si o no");
             if (si = si) {
               var dado2 = Math.floor((Math.random() * 6) + 1);
               var dincasino2 = dinero3;


               if (dado2>3) {
              (dinero3 = (dinero2 - dincasino2)) ;

            } else if (dado2<4) {
              (dinero3 = (dinero2 - -dincasino2)) ;

            }


            alert("Salio" + " " + dado);


            alert("Tu dinero actual es " + dinero3 + " €");

           }


     </script>

   </body>
 </html>

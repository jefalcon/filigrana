

function Calculate() {
  
    // Extracting value in the amount 
    // section in the variable
    const amount = document.querySelector("#RangeAmount").value;
  
    // Extracting value in the interest
    // rate section in the variable
    //const rate = document.querySelector("#rate").value;
  
    const rate=10;

    // Extracting value in the months 
    // section in the variable
    const months = document.querySelector("#RangeMonths").value;
  
    // Calculating interest per month
    const interest = (amount * (rate * 0.01)) / months;
      
    // Calculating total payment
    const total = ((amount / months) + interest).toFixed(2);
    
    document.querySelector("#amount").innerHTML = amount + " Pesos";        
    document.querySelector("#months").innerHTML = months + " Meses";        

    if (rate==0 || months==0 || interest==0){
        document.querySelector("#total")
        .innerHTML = "";        
    }else
    {
        document.querySelector("#total")
        .innerHTML =  "Tu cuota mensual es de " + total;
    }

    // document.querySelector("#total")
    //     .innerHTML =  total;
}  


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
    
    document.querySelector("#amount").innerHTML = "Importe: " + amount + " Pesos";        
    document.querySelector("#months").innerHTML = "Plazo: " +months + " Meses";        
    document.querySelector("#cuota").innerHTML = total;        

    if (rate==0 || months==0 || interest==0){
        document.querySelector("#total")
        .innerHTML = "";        
    }else
    {
        document.querySelector("#total")
        .innerHTML =  "Cuota mensual:" ;//+ total;
        document.querySelector("#cuota").value = total;  
    }

    // document.querySelector("#total")
    //     .innerHTML =  total;
}  


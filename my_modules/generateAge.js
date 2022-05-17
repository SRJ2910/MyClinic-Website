

function calculate_age(input) { 
    var dob = new Date(input.value);
    var diff_ms = Date.now() - dob.getTime();
    var age_dt = new Date(diff_ms); 
  
    document.getElementById('age').value = Math.abs(age_dt.getUTCFullYear() - 1970);
}
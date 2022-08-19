
const BMI_HEADS = document.querySelectorAll('.bmi-head');
const BMI_SI = document.getElementById('bmi-si');
const BMI_USC = document.getElementById('bmi-usc');
const CALC_BTN = document.getElementById('calc-btn');
const CLR_BTN = document.getElementById('clr-btn');
let activeForm;

// event listeners
window.addEventListener('DOMContentLoaded', () => {
    BMI_SI.classList.add('show-bmi');
    activeForm = "bmi-si";
});

CALC_BTN.addEventListener('click', performBMICalc);
CLR_BTN.addEventListener('click', () => {
    let forms = [...document.forms];
    forms.forEach(form => form.reset());
    clearBMIInfo();
});

// clear BMI Info
function clearBMIInfo(){
    document.getElementById('bmi-value').innerHTML = "";
    document.getElementById('bmi-category').innerHTML = "";
}

// check input chars
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode != 46 &&(charCode < 48 || charCode > 57)))
        return false;
    return true;
}

// bmi calculation form toggle
BMI_HEADS.forEach(bmiHead => {
    bmiHead.addEventListener('click', () => {
        if(bmiHead.id === "bmi-si-head"){
            removeActiveClass();
            clearBMIInfo();
            bmiHead.classList.add('active-head');
            BMI_USC.classList.remove('show-bmi');
            BMI_SI.classList.add('show-bmi');
            activeForm = "bmi-si";
        }
		if(bmiHead.id === "bmi-usc-head"){
            removeActiveClass();
            clearBMIInfo();
            bmiHead.classList.add('active-head');
            BMI_SI.classList.remove('show-bmi');
            BMI_USC.classList.add('show-bmi');
            activeForm = "bmi-usc";
        }
    });
});

// remove active class from heads
function removeActiveClass(){
    BMI_HEADS.forEach(bmiHead => {
        bmiHead.classList.remove('active-head');
    });
}

// main bmi calculation function
function performBMICalc(){
    let BMIInfo = getUserInput();
    if(BMIInfo) printBMIResult(BMIInfo);
}

// get input values
function getUserInput(){
    let status;
    // get input values form metric units
    if(activeForm === "bmi-si"){
        let age = document.getElementById('age2').value,
        gender = document.querySelector('#bmi-si input[name = "gender"]:checked').value,
        heightCm = document.getElementById('cm').value,
        weightKg = document.getElementById('kg').value;

        if(age > 120 || age < 1){
            document.querySelector('.alert-error-age').style.display = "block";
            setTimeout(() => {
            document.querySelector('.alert-error-age').style.display = "none";
            }, 1000);
            return;
        }
        if(heightCm > 250 || heightCm < 40){
            document.querySelector('.alert-error-height').style.display = "block";
            setTimeout(() => {
            document.querySelector('.alert-error-height').style.display = "none";
            }, 1000);
            return;
        }
        if(weightKg > 600 || weightKg < 5){
            document.querySelector('.alert-error-weight').style.display = "block";
            setTimeout(() => {
            document.querySelector('.alert-error-weight').style.display = "none";
            }, 1000);
            return;
        }
        
        status = checkInputStatus([age, heightCm, weightKg]);

        if(status === true){
            return calculateBMI({
                gender,
                age,
                height: parseFloat(heightCm) / 100,
                weight: parseFloat(weightKg)
            });
        }
    }
	
	// get input values from us units
    if(activeForm === "bmi-usc"){
        let age = document.getElementById('age1').value,
        gender = document.querySelector('#bmi-usc input[name = "gender"]:checked').value,
        heightFeet = document.getElementById('feet').value,
        heightInches = document.getElementById('inches').value,
        weightPounds = document.getElementById('pounds').value;

        if(age > 120 || age < 1){
            document.querySelector('.alert-error-age').style.display = "block";
            setTimeout(() => {
            document.querySelector('.alert-error-age').style.display = "none";
            }, 1000);
            return;
        }
        if(heightFeet > 8 || heightFeet < 0 || heightInches > 11 || heightInches < 1){
            document.querySelector('.alert-error-height').style.display = "block";
            setTimeout(() => {
            document.querySelector('.alert-error-height').style.display = "none";
            }, 1000);
            return;
        }
        if(weightPounds > 1322 || weightPounds < 11){
            document.querySelector('.alert-error-weight').style.display = "block";
            setTimeout(() => {
            document.querySelector('.alert-error-weight').style.display = "none";
            }, 1000);
            return;
        }
        
        status = checkInputStatus([age, heightFeet, heightInches, weightPounds]);

        if(status == true){
            return calculateBMI({
                gender,
                age, 
                height: parseFloat(heightFeet) * 12 + parseFloat(heightInches),
                weight: parseFloat(weightPounds)
            });
        }
    }

    document.querySelector('.alert-error').style.display = "block";
    setTimeout(() => {
        document.querySelector('.alert-error').style.display = "none";
    }, 1000);
    return false;
}

function checkInputStatus(inputs){
    for(let i = 0; i < inputs.length; i++){
        if(inputs[i].trim() === "" || isNaN(inputs[i])) return false;
    }
    return true;
}

// calculate BMI Value
function calculateBMI(values){
    let BMI;
    if(activeForm === 'bmi-usc'){
        BMI = (703 * (values.weight / Math.pow(values.height, 2))).toFixed(2);
    } else {
        BMI = (values.weight / Math.pow(values.height, 2)).toFixed(2);
    }
    return {gender: values.gender, age: values.age, BMI};
}

// print BMI result information
function printBMIResult(BMIInfo){
    
    document.getElementById('bmi-value').innerHTML = `${BMIInfo.BMI} kg/m<sup>2</sup>`;
	
	if((BMIInfo.age >= 1 && BMIInfo.age <= 20) && BMIInfo.gender == 'male'){
		if(BMIInfo.BMI < 19.1){
        bmiCategory = "Underweight";
    } else if(BMIInfo.BMI >= 19.1 && BMIInfo.BMI <= 27.1){
        bmiCategory = "Normal Weight";
    } else if(BMIInfo.BMI > 27.1 && BMIInfo.BMI <= 31.1){
        bmiCategory = "Overweight";
    } else if(BMIInfo.BMI > 31.1) {
        bmiCategory = "Obesity";
    }
	}

    if(BMIInfo.age <= 20 && BMIInfo.gender == 'female'){
		if(BMIInfo.BMI < 17.8){
        bmiCategory = "Underweight";
    } else if(BMIInfo.BMI >= 17.8 && BMIInfo.BMI <= 26.6){
        bmiCategory = "Normal Weight";
    } else if(BMIInfo.BMI > 26.6 && BMIInfo.BMI <= 32.6){
        bmiCategory = "Overweight";
    } else {
        bmiCategory = "Obesity";
    }
	}
	
	else if(BMIInfo.age > 20) {
		if(BMIInfo.BMI < 16){
        bmiCategory = "Severe Thinness";
    } else if(BMIInfo.BMI >= 16 && BMIInfo.BMI <= 18.5){
        bmiCategory = "Underweight";
    } else if(BMIInfo.BMI > 18.5 && BMIInfo.BMI <= 25){
        bmiCategory = "Normal Weight";
    } else if(BMIInfo.BMI > 25 && BMIInfo.BMI <= 29.9){
        bmiCategory = "Overweight";
    } else if(BMIInfo.BMI > 29.9){
        bmiCategory = "Obesity";
    }
	}
    
    document.getElementById('bmi-category').innerHTML = `${bmiCategory}`;
}
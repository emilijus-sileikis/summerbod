<?php include('partials/menuhealthnav.php'); ?>

<link rel="stylesheet" href="<?php echo base_url('assets/css/health.css'); ?>">

<div class="container">

    <h2 class="text-center header">BMI calculator</h2>

    <h3 class="health-text"> BMI Introduction </h3>
    <p class="health-text">
        BMI is a value derived from the weight and the height of a person. It is defined as the body mass divided by the square of the body height, and is expressed in units of kg/m2.
        BMI is widely used as a general indicator of whether a person has a healthy body weight for their height, gender or age. Specifically, the value obtained from the calculation 
        of BMI is used to categorize whether a person is underweight, normal weight, overweight, or obese depending on what range the value falls between. Being overweight or underweight
        can have significant health effects, so while BMI is an imperfect measure of healthy body weight, it is a useful indicator of whether any additional testing or action is required.
    </p>

    <p class="health-text">BMI is calculated differently based on age and gender. The table for adults considers both males and females that are above the age of 20. BMI value is different for Non-Adults. 
        In addition, gender also has a small inpact for children and teenagers BMI.
    </p>
    
    <div class="health-menu-container">

        <table>
            <caption>BMI Table For Adults:</caption>
            <thead>
                <tr>
                    <th scope="col">Category</th>
                    <th scope="col">BMI - kg/m2</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td data-label="Category">Underweight</td>
                    <td data-label="BMI - kg/m2">< 16 to 18.5</td>
                </tr>
    
                <tr>
                    <td scope="row" data-label="Category">Normal Weight</td>
                    <td data-label="BMI - kg/m2">from 18.5 to 25</td>
                </tr>
    
                <tr>
                    <td scope="row" data-label="Category">Overweight</td>
                    <td data-label="BMI - kg/m2">from 25 to 29.9</td>
                </tr>
                
                <tr>
                    <td scope="row" data-label="Category">Obesity</td>
                    <td data-label="BMI - kg/m2e">> 29.9</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="health-menu-container">

        <table>
            <caption>BMI Table For Non-Adults (Girls):</caption>
            <thead>
                <tr>
                    <th scope="col">Category</th>
                    <th scope="col">BMI - kg/m2</th>
                </tr>
            </thead>
  
            <tbody>
                <tr>
                    <td data-label="Category">Underweight</td>
                    <td data-label="BMI - kg/m2">< 17.8</td>
                </tr>
    
                <tr>
                    <td scope="row" data-label="Category">Normal Weight</td>
                    <td data-label="BMI - kg/m2">from 17.8 to 26.6</td>
                </tr>
    
                <tr>
                    <td scope="row" data-label="Category">Overweight</td>
                    <td data-label="BMI - kg/m2">from 26.6 to 32.6</td>
                </tr>
    
                <tr>
                    <td scope="row" data-label="Category">Obesity</td>
                    <td data-label="BMI - kg/m2">> 32.6</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="health-menu-container">

        <table>
            <caption>BMI Table For Non-Adults (Boys):</caption>
            <thead>
                <tr>
                    <th scope="col">Category</th>
                    <th scope="col">BMI - kg/m2</th>
                </tr>
            </thead>
  
            <tbody>
                <tr>
                    <td data-label="Category">Underweight</td>
                    <td data-label="BMI - kg/m2">< 19.1</td>
                </tr>
    
                <tr>
                    <td scope="row" data-label="Category">Normal Weight</td>
                    <td data-label="BMI - kg/m2">from 19.1 to 27.1</td>
                </tr>
    
                <tr>
                    <td scope="row" data-label="Category">Overweight</td>
                    <td data-label="BMI - kg/m2">from 27.1 to 31.1</td>
                </tr>
    
                <tr>
                    <td scope="row" data-label="Category">Obesity</td>
                    <td data-label="BMI - kg/m2">> 31.1</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="clearfix"></div>

    <div class="health-text-container">

        <div class="bmi-container">
    
            <?php include('bodymass.php'); ?>

        </div>

        <br> <br>

        <h3 class="health-text-header">Risks Associated With Being Overweight:</h3> <br>
        <li class="health-text">High blood pressure.</li>
        <li class="health-text">Higher levels of cholesterol.</li>
        <li class="health-text">Type II diabetes.</li>
        <li class="health-text">Coronary heart disease, stroke.</li>
        <li class="health-text">Gallbladder disease.</li>
        <li class="health-text">Osteoarthritis.</li>
        <li class="health-text">Breathing problems.</li>
        <li class="health-text">Clinical depression, anxiety.</li>
        <li class="health-text">Body pain and others.</li>	

        <br> <br> 
        
        <h3 class="health-text-header">Risks Associated With Being Underweight:</h3> <br>
        <li class="health-text">Malnutrition, vitamin deficiencies, anemia.</li>
        <li class="health-text">Osteoporosis and other bone diseases.</li>
        <li class="health-text">Decrease in immune function.</li>
        <li class="health-text">Growth and development issues.</li>
        <li class="health-text">Possible reproductive issues for women.</li>
        <li class="health-text">Generally, an increased risk of mortality.</li>

    </div>

</div>

<?php include('partials/footer.php'); ?>

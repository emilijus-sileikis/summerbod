<?php echo view('partials/menuhealthnav'); ?>

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
                    <td data-label="BMI - kg/m2">&lt; 16 to 18.5</td>
                </tr>
    
                <tr>
                    <td data-label="Category">Normal Weight</td>
                    <td data-label="BMI - kg/m2">from 18.5 to 25</td>
                </tr>
    
                <tr>
                    <td data-label="Category">Overweight</td>
                    <td data-label="BMI - kg/m2">from 25 to 29.9</td>
                </tr>
                
                <tr>
                    <td data-label="Category">Obesity</td>
                    <td data-label="BMI - kg/m2e">&gt; 29.9</td>
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
                    <td data-label="BMI - kg/m2">&lt; 17.8</td>
                </tr>
    
                <tr>
                    <td data-label="Category">Normal Weight</td>
                    <td data-label="BMI - kg/m2">from 17.8 to 26.6</td>
                </tr>
    
                <tr>
                    <td data-label="Category">Overweight</td>
                    <td data-label="BMI - kg/m2">from 26.6 to 32.6</td>
                </tr>
    
                <tr>
                    <td data-label="Category">Obesity</td>
                    <td data-label="BMI - kg/m2">&gt; 32.6</td>
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
                    <td data-label="BMI - kg/m2">&lt; 19.1</td>
                </tr>
    
                <tr>
                    <td data-label="Category">Normal Weight</td>
                    <td data-label="BMI - kg/m2">from 19.1 to 27.1</td>
                </tr>
    
                <tr>
                    <td data-label="Category">Overweight</td>
                    <td data-label="BMI - kg/m2">from 27.1 to 31.1</td>
                </tr>
    
                <tr>
                    <td data-label="Category">Obesity</td>
                    <td data-label="BMI - kg/m2">&gt; 31.1</td>
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
        <ul class="health-text"><li>High blood pressure.</li></ul>
        <ul class="health-text"><li>Higher levels of cholesterol.</li></ul>
        <ul class="health-text"><li>Type II diabetes.</li></ul>
        <ul class="health-text"><li>Coronary heart disease, stroke.</li></ul>
        <ul class="health-text"><li>Gallbladder disease.</li></ul>
        <ul class="health-text"><li>Osteoarthritis.</li></ul>
        <ul class="health-text"><li>Breathing problems.</li></ul>
        <ul class="health-text"><li>Clinical depression, anxiety.</li></ul>
        <ul class="health-text"><li>Body pain and others.</li></ul>

        <br> <br> 
        
        <h3 class="health-text-header">Risks Associated With Being Underweight:</h3> <br>
        <ul class="health-text"><li>Malnutrition, vitamin deficiencies, anemia.</li></ul>
        <ul class="health-text"><li>Osteoporosis and other bone diseases.</li></ul>
        <ul class="health-text"><li>Decrease in immune function.</li></ul>
        <ul class="health-text"><li>Growth and development issues.</li></ul>
        <ul class="health-text"><li>Possible reproductive issues for women.</li></ul>
        <ul class="health-text"><li>Generally, an increased risk of mortality.</li></ul>

    </div>

</div>

<?php echo view('partials/footer'); ?>

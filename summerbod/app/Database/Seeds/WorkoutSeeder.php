<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class WorkoutSeeder extends Seeder
{
    public function run()
    {
        $data = [
        [
            'image' => base_url('assets/images/workouts/Plank.gif'),
            'category' => 'Abdominals',
            'name' => 'Plank',
            'difficulty' => 'Beginner',
            'descr' => 'Lie facedown with your forearms on the floor and your hands clasped.
            Extend your legs behind you and rise up onto your toes.
            Keeping your back straight, tighten your core and hold the position for as long as you can.'
        ],
        [
            'image' => base_url('assets/images/workouts/Lunge.gif'),
            'category' => 'Glutes',
            'name' => 'Lunge',
            'difficulty' => 'Beginner',
            'descr' => 'Stand with your hands on your hips and your feet hip-width apart.
            Step your right leg forward and slowly lower your body until your left (back) knee is close to or touching the floor and bent at least 90 degrees.
            Return to the starting position and repeat on the other side.'
        ],
		[
            'image' => base_url('assets/images/workouts/Squat.gif'),
            'category' => 'Glutes',
            'name' => 'Squat',
            'difficulty' => 'Beginner',
            'descr' => 'Stand with your feet parallel.
			Slowly start to crouch by bending your hips and knees until your thighs are at least parallel to the floor.
			Make sure your heels do not rise off the floor.
			Press through your heels to return to a standing position.'
        ],
		[
            'image' => base_url('assets/images/workouts/Step-up.gif'),
            'category' => 'Calves',
            'name' => 'Step-up',
            'difficulty' => 'Beginner',
            'descr' => 'Find a step or bench.
			Place your right foot on the elevated surface.
			Step up until your right leg is straight.
			Return to the starting position.'
        ],
        [
            'image' => base_url('assets/images/workouts/Handstand push-up.gif'),
            'category' => 'Shoulders',
            'name' => 'Handstand push-up',
            'difficulty' => 'Hard',
            'descr' => 'Get set in a handstand position against a wall.
            Bend your elbows at a 90-degree angle, doing an upside-down push-up so your head moves toward the floor and your legs remain against the wall.'
        ],
		[
            'image' => base_url('assets/images/workouts/Bear crawl.gif'),
            'category' => 'Shoulders',
            'name' => 'Bear crawl',
            'difficulty' => 'Intermediate',
            'descr' => 'Starting on your hands and knees, rise up onto your toes.
			Tighten your core, and slowly reach forward with your right arm and right knee, followed by your left side.'
        ],
        [
            'image' => base_url('assets/images/workouts/Bench press.gif'),
            'category' => 'Chest',
            'name' => 'Bench Press',
            'difficulty' => 'Intermediate',
            'descr' => 'Lay flat on the bench with your feet on the ground. With straight arms unrack the bar.
            Lower the bar to your mid chest
            Raise the bar until youve locked your elbows.'
        ],
		[
            'image' => base_url('assets/images/workouts/Reverse fly.gif'),
            'category' => 'Chest',
            'name' => 'Reverse fly',
            'difficulty' => 'Beginner',
            'descr' => 'Lay flat on the bench with your feet on the ground. With straight arms unrack the bar.
            Lower the bar to your mid chest
            Raise the bar until youve locked your elbows.'
        ],
		[
            'image' => base_url('assets/images/workouts/Leg press.gif'),
            'category' => 'Quads',
            'name' => 'Leg Press',
            'difficulty' => 'Intermediate',
            'descr' => 'Place your legs on the platform with your feet at shoulder width.
			Release the weight and extend your legs fully, without locking your knees.
			Lower the weight until your legs are at a 90° angle (but DO NOT allow your butt and lower back to rise off of the pad. This will put your lower back in a rounded position, which is very dangerous.)
			Raise the weight back to starting position.'
        ],
		[
            'image' => base_url('assets/images/workouts/Inchworm.gif'),
            'category' => 'Abdominals',
            'name' => 'Inchworm',
            'difficulty' => 'Intermediate',
            'descr' => 'Grab a pair of dumbbells.
			Stand up straight, with one foot in front of the other and your front knee slightly bent.
			With your palms facing each other and abs engaged, bend forward slightly from your waist and extend your arms out to the sides, squeezing your shoulder blades.'
        ],
		[
            'image' => base_url('assets/images/workouts/Barbell curtsy lunge.gif'),
            'category' => 'Quads',
            'name' => 'Barbell Curtsy Lunge',
            'difficulty' => 'Hard',
            'descr' => 'Place the barbell on your back
			Step your foot back and around while simultaneously bringing the weight down.
			Return to start and repeat on other leg.'
        ],
		[
            'image' => base_url('assets/images/workouts/Superman.gif'),
            'category' => 'Lower-back',
            'name' => 'Superman',
            'difficulty' => 'Intermediate',
            'descr' => 'Lie facedown with your arms and legs extended.
			Keeping your torso as still as possible, simultaneously raise your arms and legs to form a small curve in your body.
			Lower your limbs, and repeat.'
        ],
		[
            'image' => base_url('assets/images/workouts/lol.gif'),
            'category' => 'Lower-back',
            'name' => 'Deadlift',
            'difficulty' => 'Hard',
            'descr' => 'Stand with your mid-foot under the bar and grip the bar with your hands, about a shoulder width apart.
			Bend your knees, then lift the bar by straightening your back. It is important to keep your back straight.
			Stand to your full height and hold.
			Lower the bar to the floor by bending your knees and keeping your back straight.'
        ],
		[
            'image' => base_url('assets/images/workouts/Barbell curl.gif'),
            'category' => 'Biceps',
            'name' => 'Barbell Curl',
            'difficulty' => 'Beginner',
            'descr' => 'While holding the upper arms stationary, curl the weights forward while contracting the biceps as you breathe out.
			Continue the movement until your biceps are fully contracted and the bar is at shoulder level.
			Hold the contracted position for a second and squeeze the biceps hard.
			Slowly bring the weight back down to the starting position.'
        ],
		[
            'image' => base_url('assets/images/workouts/lol.gif'),
            'category' => 'Biceps',
            'name' => 'Dumbbell Curl',
            'difficulty' => 'Beginner',
            'descr' => 'Stand up straight with a dumbbell in each hand at arms length.
			Raise one dumbbell and twist your forearm until it is vertical and your palm faces the shoulder.
			Lower to original position and repeat with opposite arm.'
        ],
		[
            'image' => base_url('assets/images/workouts/Tricep dips.gif'),
            'category' => 'Triceps',
            'name' => 'Tricep dips',
            'difficulty' => 'Beginner',
            'descr' => 'Sit on the floor near a step or bench with your knees slightly bent.
			Grab the edge of the elevated surface and straighten your arms.
			Bend your arms to a 90-degree angle and straighten again while your heels push into the floor, lifting yourself.
			For some extra fire, reach your right arm out while lifting your left leg.'
        ],
		[
            'image' => base_url('assets/images/workouts/Diamond push up.gif'),
            'category' => 'Triceps',
            'name' => 'Diamond push-up',
            'difficulty' => 'Intermediate',
            'descr' => 'Get into a push-up position with diamond-shaped hands, so that your thumbs and index fingers touch.
			Then, do regular push-ups.'
        ],
		[
            'image' => base_url('assets/images/workouts/Pull ups.gif'),
            'category' => 'Lats',
            'name' => 'Pull Ups',
            'difficulty' => 'Intermediate',
            'descr' => 'Grasp the bar with an overhand grip, arms and shoulders fully extended.
			Pull your body up until your chin is above the bar.
			Lower your body back to starting position.'
        ],
		[
            'image' => base_url('assets/images/workouts/Neutral grip pulldown.gif'),
            'category' => 'Lats',
            'name' => 'Neutral Grip Pulldown',
            'difficulty' => 'Beginner',
            'descr' => 'Grip the bar with the palms facing forward, your hands need to be spaced out at a distance wider than shoulder width.
			As you have both arms extended in front of you holding the bar, bring your torso back around 30 degrees while sticking your chest out.
			Pull the bar down to about chin level or a little lower in a smooth movement whilst squeezing the shoulder blades together.
			After a second of squeezing, slowly raise the bar back to the starting position when your arms are fully extended.'
        ],
		[
            'image' => base_url('assets/images/workouts/Traps stretch mid.gif'),
            'category' => 'Traps mid-back',
            'name' => 'Traps (mid-back) Stretch',
            'difficulty' => 'Warm-up',
            'descr' => 'Sit on the ground and lay one leg flat and the other over the top.
			Hold your leg with the same side arm and slowly rotate your hips and back.
			Hold at the peak of the stretch, then slowly return to starting position.
			Switch sides and repeat.'
        ],
		[
            'image' => base_url('assets/images/workouts/lol.gif'),
            'category' => 'Traps mid-back',
            'name' => 'Superman Holds',
            'difficulty' => 'Beginner',
            'descr' => 'Get on the floor on your belly. Squeeze your glutes to raise your feet and legs and squeeze your shoulder blades to raise your arms off the floor in an extended position.
			Focus on firing your entire posterior chain to begin the movement—your lower back shouldnt take all the strain.
			Keep your neck in a neutral position and avoid looking up. Hold the top position for a two count before lowering back to the ground.
			Repeat.'
        ],
		[
            'image' => base_url('assets/images/workouts/Wrist curls.gif'),
            'category' => 'Forearms',
            'name' => 'Wrist Curl',
            'difficulty' => 'Beginner',
            'descr' => 'Grip the dumbbell with your palm facing upwards with your forearm rested against the bench.
			Slowly curl your wrist upwards in a semicircular motion.
			Return to starting position and repeat.'
        ],
		[
            'image' => base_url('assets/images/workouts/Barbell wrist curl.gif'),
            'category' => 'Forearms',
            'name' => 'Barbell Wrist Curl',
            'difficulty' => 'Beginner',
            'descr' => 'Grab a straight bar with a supinated (underhand) grip.
			Kneel down next to a flat bench and place your forearms on the bench with your wrists just off the bench.
			Let the barbell pull down on your wrists until they are extended.
			Curl the barbell until your wrists are fully flexed.
			Lower in a controlled manner and repeat.'
        ],
		[
            'image' => base_url('assets/images/workouts/30 degree shrug.gif'),
            'category' => 'Traps',
            'name' => '30 Degree Shrug',
            'difficulty' => 'Beginner',
            'descr' => 'Use a handle attachment on both sides of crossover. With cable attachment set all the way to the bottom.
			Grab both handles and make sure you are centered in the machine. Let your arms hang freely.
			Pull your shoulder blades up and in towards your ears. Let your shoulder blades depress back to the starting position.'
        ],
		[
            'image' => base_url('assets/images/workouts/Silverback shrug.gif'),
            'category' => 'Traps',
            'name' => 'Silverback Shrug',
            'difficulty' => 'Beginner',
            'descr' => 'Use a bar attachment. Cable should be set all the way to the bottom.
			Stand up with the attachment in hand, walk a couple of steps back make sure you are standing upright and not leaning backwards.
			Retract your shoulder blades and then protract to return to the starting position.'
        ],
		[
            'image' => base_url('assets/images/workouts/lol.gif'),
            'category' => 'Hamstrings',
            'name' => 'Stiff Leg Deadlifts',
            'difficulty' => 'Intermediate',
            'descr' => 'Stand with a barbell at your shins with your feet shoulder width apart.
			Bend forward at your hips and keep your knees as fully extended as possible.
			Grab the barbell and then extend your hips while maintaining a straight back.
			From the standing position, lower the weight in a controlled manner.
			You can either lower the weight to the floor or before you touch the floor, depending on your mobility.'
        ],
		[
            'image' => base_url('assets/images/workouts/lol.gif'),
            'category' => 'Hamstrings',
            'name' => 'Hamstring Curl',
            'difficulty' => 'Beginner',
            'descr' => 'Lay down on the machine, placing your legs beneath the padded lever. Position your legs so that the padded lever is below your calve muscles.
			Support yourself by grabbing the side handles of the machine, and slowly raise the weight with your legs, toes pointed straight.
			Pause at the apex of the motion, then slowly return to starting position.'
        ],
        [
            'image' => base_url('assets/images/workouts/Tuck jump.gif'),
            'category' => 'Abdominals',
            'name' => 'Tuck jump',
            'difficulty' => 'Intermediate',
            'descr' => 'Stand with your knees slightly bent, then jump up as high as possible.
            Bring your knees in toward your chest while extending your arms straight out.
            Land with your knees slightly bent and quickly jump again.'            
        ],
        [
            'image' => base_url('assets/images/workouts/Plank to push-up.gif'),
            'category' => 'Abdominals',
            'name' => 'Plank to push-up',
            'difficulty' => 'Intermediate',
            'descr' => 'Start in a plank position.
            Place one hand at a time on the floor to lift into a push-up position with your back straight and core engaged.
            Move one arm at a time back into the plank position (forearms on the floor).
            Repeat, alternating your arm that makes the first move.'            
        ],
        [
            'image' => base_url('assets/images/workouts/L seat.gif'),
            'category' => 'Abdominals',
            'name' => 'L seat',
            'difficulty' => 'Intermediate',
            'descr' => 'Sit with your legs extended and your feet flexed.
            Place your hands on the floor and slightly round your torso.
            Lift your hips off the floor, hold for 5 seconds, and release.
            Repeat.'                        
        ],
        [
            'image' => base_url('assets/images/workouts/Rotational push-up.gif'),
            'category' => 'Abdominals',
            'name' => 'Rotational push-up',
            'difficulty' => 'Intermediate',
            'descr' => 'After coming back up into a starting push-up position, rotate your body to the right and extend your right hand overhead, forming a T with your arms and torso.
            Return to the starting position
            Do a regular push-up, and then rotate to the left.'                                    
        ],
        [
            'image' => base_url('assets/images/workouts/Flutter kick.gif'),
            'category' => 'Abdominals',
            'name' => 'Flutter kick',
            'difficulty' => 'Intermediate',
            'descr' => 'Lie faceup with your arms at your sides and your palms facing down.
            With your legs extended, lift your heels about 6 inches off the floor.
            Make small, quick, up-and-down pulses with your legs while keeping your core engaged.'                                                
        ],
        [
            'image' => base_url('assets/images/workouts/Side plank.gif'),
            'category' => 'Abdominals',
            'name' => 'Side plank',
            'difficulty' => 'Intermediate',
            'descr' => 'Lie faceup and roll to the side.
            Come up onto one foot and elbow.
            Make sure your hips are lifted and your core is engaged.'                                               
        ],
        [
            'image' => base_url('assets/images/workouts/Russian twist.gif'),
            'category' => 'Abdominals',
            'name' => 'Russian twist',
            'difficulty' => 'Intermediate',
            'descr' => 'Sit on the floor with your knees bent and feet together, lifted a few inches off the floor.
            With your back at a 45-degree angle to the floor, move your arms from side to side in a twisting motion.
            The slower it is performed, the deeper the burn.'                                              
        ],
        [
            'image' => base_url('assets/images/workouts/Bicycles.gif'),
            'category' => 'Abdominals',
            'name' => 'Bicycle',
            'difficulty' => 'Beginner',
            'descr' => 'Lie faceup with your knees bent and your hands behind your head.
            Bring your knees in toward your chest.
            Bring your right elbow toward your left knee as your right leg straightens.
            Continue alternating sides like you’re pedaling a bike.'                                                          
        ],
        [
            'image' => base_url('assets/images/workouts/Segmental rotation.gif'),
            'category' => 'Abdominals',
            'name' => 'Segmental rotation',
            'difficulty' => 'Beginner',
            'descr' => 'Lying faceup with your knees bent and core tight, let your knees fall gradually to the left until you feel a good stretch.
            Hold for 5 seconds, then return to the center.
            Repeat on the right.'                                                                      
        ],
        [
            'image' => base_url('assets/images/workouts/Crunches.gif'),
            'category' => 'Abdominals',
            'name' => 'Crunches',
            'difficulty' => 'Beginner',
            'descr' => 'Lie down on your back, with your feet on the floor, knees bent. Place your hands on either side of your head in a comfortable position. 
            Bend your hips and waist to raise your body off the ground. Lower your body back to the ground into the starting position.'                                                                                 
        ],
        [
            'image' => base_url('assets/images/workouts/Shoulder bridge.gif'),
            'category' => 'Glutes',
            'name' => 'Shoulder bridge',
            'difficulty' => 'Beginner',
            'descr' => 'Lie faceup with your knees bent and your feet hip-width apart.
            Place your arms at your sides and lift your spine and hips. Only your head, feet, arms, and shoulders should be on the floor.
            Lift one leg, keeping your core tight.
            Slowly bring your leg back down, then lift back up.'                                                                                             
        ],
        [
            'image' => base_url('assets/images/workouts/Burpee.gif'),
            'category' => 'Glutes',
            'name' => 'Burpee',
            'difficulty' => 'Beginner',
            'descr' => 'This one starts in a low squat position with your hands on the floor.
            Next, kick your feet back to a push-up position.
            Complete one push-up, then immediately return your feet to the squat position.
            Leap up as high as possible before squatting and moving back into the push-up portion of the show.'                                                                                                        
        ],
        [
            'image' => base_url('assets/images/workouts/Wall sit.gif'),
            'category' => 'Glutes',
            'name' => 'Wall sit',
            'difficulty' => 'Beginner',
            'descr' => 'Slowly slide your back down a wall until your thighs are parallel to the floor.
            Make sure your knees are directly above your ankles and keep your back straight.'                                                                                                                 
        ],
        [
            'image' => base_url('assets/images/workouts/Clock lunge.gif'),
            'category' => 'Glutes',
            'name' => 'Clock lunge',
            'difficulty' => 'Hard',
            'descr' => 'Complete a traditional forward lunge, then take a big step to the right and lunge again.
            Finish off the semicircle with a backward lunge, then return to standing.'                                                                                                                             
        ],
        [
            'image' => base_url('assets/images/workouts/Lunge to row.gif'),
            'category' => 'Glutes',
            'name' => 'Lunge to row',
            'difficulty' => 'Hard',
            'descr' => 'Start by doing a normal lunge.
            Instead of bringing your forward leg back to the starting position, raise it off the floor while lifting your arms overhead.
            Your leg should remain bent at about 90 degrees.
            Add weights as needed.'                                                                                                                                         
        ],
        [
            'image' => base_url('assets/images/workouts/Pistol squat.gif'),
            'category' => 'Glutes',
            'name' => 'Pistol squat',
            'difficulty' => 'Intermediate',
            'descr' => 'Stand holding your arms straight out in front of your body.
            Raise your right leg, flexing your right ankle and pushing your hips back.
            Lower your body while keeping your right leg raised.
            Hold, then return to standing.'                                                                                                                                                               
        ],
        [
            'image' => base_url('assets/images/workouts/Curtsy lunge.gif'),
            'category' => 'Glutes',
            'name' => 'Curtsy lunge',
            'difficulty' => 'Intermediate',
            'descr' => 'When lunging, step your left leg back behind your right leg, bending your knees.
            Lower your hips until your right thigh is almost parallel to the floor.
            Remember to keep your torso upright and your hips square.'                                                                                                                                                                          
        ],
        [
            'image' => base_url('assets/images/workouts/Single-leg deadlift.gif'),
            'category' => 'Glutes',
            'name' => 'Single-leg deadlift',
            'difficulty' => 'Hard',
            'descr' => 'Start in a standing position with your feet together.
            Lift your right leg slightly.
            Lower your arms and torso while raising your right leg behind you.
            Keep your left knee slightly bent and reach your arms as close to the floor as possible.
            Raise your torso while lowering your right leg.
            Switch legs.'                                                                                                                                                                                      
        ],
        [
            'image' => base_url('assets/images/workouts/Calf raise.gif'),
            'category' => 'Glutes',
            'name' => 'Calf raise',
            'difficulty' => 'Intermediate',
            'descr' => 'From a standing position, slowly rise up on your toes, keeping your knees straight and heels off the floor.
            Hold briefly, then come back down.
            Try standing on something elevated to achieve full range of motion.'                                                                                                                                                                                     
        ],
        [
            'image' => base_url('assets/images/workouts/Conventional deadlift.gif'),
            'category' => 'Glutes',
            'name' => 'Conventional deadlift',
            'difficulty' => 'Intermediate',
            'descr' => 'Stand next to the racked bar. Push your hips back as you reach down for the bar.
            Once you have made contact with the bar, secure your grip and engage your abdominals while lifting the bar up to your waist.'                                                                                                                                                                                                 
        ],
        [
            'image' => base_url('assets/images/workouts/Barbell glute bridge.gif'),
            'category' => 'Glutes',
            'name' => 'Conventional deadlift',
            'difficulty' => 'Intermediate',
            'descr' => 'Roll the barbell towards you, so it is sitting on your hips. Place your upper back on a bench and bend your knees with your feet flat on the floor. 
            Squeeze your glutes and drive your hips up, holding onto the barbell with both hands to prevent it from falling until your body is in a straight line from knee to chin. 
            Hold this position for a beat and then lower the weight back down'                                                                                                                                                                                                             
        ],
        [
            'image' => base_url('assets/images/workouts/Seated calf raise Machine.gif'),
            'category' => 'Calves',
            'name' => 'Seated Calf Raises (Machine)',
            'difficulty' => 'Intermediate',
            'descr' => 'Get comfortable on the machine, then place your lower thighs beneath the padded lever. Place your toes and the balls of your feet onto the foot supports.
            Prevent the weight from slipping forward by gripping the handles, and release the safety bar. Lower the weight until your calves are extended.
            Push your heels up to lift the padded lever and hold the contracted position, then slowly lower back down to the starting position. Repeat.'                                                                                                                                                                                                                         
        ],
        [
            'image' => base_url('assets/images/workouts/Barbell calf raises.gif'),
            'category' => 'Calves',
            'name' => 'Barbell Calf Raises',
            'difficulty' => 'Intermediate',
            'descr' => 'Place the bar on your back
            Start with feet flat on the ground
            Extend your heels upwards while keeping your knees stationary, and pause at the contracted position.
            Slowly return to the starting position. Repeat.'                                                                                                                                                                                                                                    
        ],
        [
            'image' => base_url('assets/images/workouts/Standing calf raises.gif'),
            'category' => 'Calves',
            'name' => 'Standing Calf Raises',
            'difficulty' => 'Intermediate',
            'descr' => 'Adjust the machine in accordance with your height and place your shoulders underneath the padded lever.
            The balls of your feet should be supporting your weight on the calve block, your heels extending off of it.
            Extend your heels upwards while keeping your knees stationary, and pause at the contracted position.
            Slowly return to the starting position. Repeat.'                                                                                                                                                                                                                                                
        ],
        [
            'image' => base_url('assets/images/workouts/Single-leg calf raises.gif'),
            'category' => 'Calves',
            'name' => 'Single Leg Calf Raise',
            'difficulty' => 'Intermediate',
            'descr' => 'Sitting comfortably on a chair with your core stomach muscles engaged, place your feet on the floor.
            Place the kettlebell on your legs, just above the knees and raise your heels upwards off the floor.
            Pause when your heels are fully extended and then slowly return to the starting position and repeat.'                                                                                                                                                                                                                                                           
        ],
        [
            'image' => base_url('assets/images/workouts/Walking calf raises.gif'),
            'category' => 'Calves',
            'name' => 'Walking Calf Raises',
            'difficulty' => 'Beginner',
            'descr' => 'Walk forward and push your toe into the ground.
            Lift you heel off the ground each step and tense your calf muscle.
            Repeat on each leg and walk forward slowly.'                                                                                                                                                                                                                                                                       
        ],
        [
            'image' => base_url('assets/images/workouts/Calves stretch.gif'),
            'category' => 'Calves',
            'name' => 'Calves Stretch',
            'difficulty' => 'Warm-up',
            'descr' => 'Place the ball of your foot against the wall with your heel on the ground. Place your hands on the wall in front of your shoulders.
            Keeping your knee straight, slowly lean towards the wall, pause for a few seconds when you feel the stretch extending through your calf muscle.
            Return to the starting position, and repeat the stretch with your other leg.'                                                                                                                                                                                                                                                                                  
        ],
        [
            'image' => base_url('assets/images/workouts/Seated calf raises.gif'),
            'category' => 'Calves',
            'name' => 'Seated Calf Raise',
            'difficulty' => 'Beginner',
            'descr' => 'Sit on a bench in a manner where just the top part of each foot is touching the bottom of the platform in front of you.
            Push back as far as you can while keeping your toes connected to the platform.
            Return and repeat'                                                                                                                                                                                                                                                                                             
        ],
        [
            'image' => base_url('assets/images/workouts/Mountain climber.gif'),
            'category' => 'Shoulders',
            'name' => 'Mountain climber',
            'difficulty' => 'Intermediate',
            'descr' => 'Start on your hands and knees.
            Bring your left foot forward to directly under your chest while straightening your right leg.
            Keeping your hands on the floor and your core tight, jump and switch legs.
            Your left leg should now be extended behind you, with your right knee forward.'                                                                                                                                                                                                                                                                                                     
        ],
        [
            'image' => base_url('assets/images/workouts/Half-kneeling landmine press.gif'),
            'category' => 'Shoulders',
            'name' => 'Half-Kneeling Landmine Press',
            'difficulty' => 'Intermediate',
            'descr' => 'Hold the barbell at shoulder height in hand nearest your back leg and actively grip the barbell. Press up at about 45 degrees and reach towards the ceiling at the end of the lockout. 
            Slowly lower down under control and repeat.'                                                                                                                                                                                                                                                                                                                            
        ],
        [
            'image' => base_url('assets/images/workouts/Arnold press.gif'),
            'category' => 'Shoulders',
            'name' => 'Arnold Press',
            'difficulty' => 'Intermediate',
            'descr' => 'In a seated position, kick dumbbells up to a traditional starting position and rotate your hands until your palms are facing towards you.
            In one motion, press the dumbbells and rotate your palms to face forward. Continue lifting until your biceps are by or behind your ears.'                                                                                                                                                                                                                                                                                                                                        
        ],
        [
            'image' => base_url('assets/images/workouts/Bottoms-up kettlebell press.gif'),
            'category' => 'Shoulders',
            'name' => 'Bottoms-Up Kettlebell Press',
            'difficulty' => 'Beginner',
            'descr' => 'Grab a lighter kettlebell bottoms up.
            Press up keeping the kettlebell facing directly upwards and your elbow underneath the center of mass of the kettlebell. 
            Lockout with the bell in this position and the biceps close to the ear.'                                                                                                                                                                                                                                                                                                                                                    
        ],
        [
            'image' => base_url('assets/images/workouts/Wide-grip seated row.gif'),
            'category' => 'Shoulders',
            'name' => 'Wide-grip seated row',
            'difficulty' => 'Intermediate',
            'descr' => 'Take an overhand wide grip until your upper arms are about 45 degrees to your torso. 
            Keeping an upright torso, row the bar to your sternum until you feel a strong contraction in your upper back. 
            Slowly return to the starting position and repeat.'                                                                                                                                                                                                                                                                                                                                                              
        ],
        [
            'image' => base_url('assets/images/workouts/Leaning lateral raise.gif'),
            'category' => 'Shoulders',
            'name' => 'Leaning Lateral Raise',
            'difficulty' => 'Intermediate',
            'descr' => 'Hold a power rack or a pole and bring your feet close to or under your hands. 
            With the dumbbell resting on your outer thigh, raise the dumbbell away from you until you feel a strong contraction in your shoulders and slowly lower down and repeat.'                                                                                                                                                                                                                                                                                                                                                                         
        ],
        [
            'image' => base_url('assets/images/workouts/Incline y raise.gif'),
            'category' => 'Shoulders',
            'name' => 'Incline Y Raise',
            'difficulty' => 'Intermediate',
            'descr' => 'Set up the bench at a 45-degree incline. Lie face down with your knees slightly bent. 
            Hold the weights with an overhand grip. Extend your arms to hang straight under your shoulders. 
            Activate your posterior delts to raise the weights up and out. Keep your arms straight until they are fully extended.
            Reset and repeat.'                                                                                                                                                                                                                                                                                                                                                                                   
        ],
        [
            'image' => base_url('assets/images/workouts/Seated dumbbell shoulder press.gif'),
            'category' => 'Shoulders',
            'name' => 'Seated Dumbbell Shoulder Press',
            'difficulty' => 'Intermediate',
            'descr' => 'Sit upright on an incline bench and lift up both dumbbells so they are sitting on your shoulders. 
            Keep your shoulders away from your ears.
            Press both dumbbells overhead until your elbows lock out.
            Reset and repeat.'                                                                                                                                                                                                                                                                                                                                                                                             
        ],
        [
            'image' => base_url('assets/images/workouts/Barbell overhead carry.gif'),
            'category' => 'Shoulders',
            'name' => 'Barbell Overhead Carry',
            'difficulty' => 'Intermediate',
            'descr' => 'Place your hands slightly wider than shoulder-width. 
            Press the barbell overhead. 
            Position your biceps behind your ears.
            Take slow, deliberate steps for your preffered amount of time.
            Repeat.'                                                                                                                                                                                                                                                                                                                                                                                                       
        ],
        [
            'image' => base_url('assets/images/workouts/Dumbbell lateral raise pause set.gif'),
            'category' => 'Shoulders',
            'name' => 'Dumbbell Lateral Raise Pause Set',
            'difficulty' => 'Intermediate',
            'descr' => 'Hold a pair of dumbbells by your side. Keep your shoulders down and chest up. 
            Perform six lateral raises with your elbows slightly bent. 
            Don’t raise the dumbbells above shoulder height. 
            On the sixth rep, hold the weights in the contracted position for six seconds. 
            Continue this rep/pause sequence down to one rep and one second.'                                                                                                                                                                                                                                                                                                                                                                                                                
        ],
        [
            'image' => base_url('assets/images/workouts/Single-arm push press.gif'),
            'category' => 'Shoulders',
            'name' => 'Single-Arm Push Press',
            'difficulty' => 'Intermediate',
            'descr' => 'Clean one dumbbell to the top of your shoulder. 
            Pack your shoulders down and away from your ears. Brace your core. 
            Bend your knees to dip down until your knees exceed your toes.
            Press the dumbbell overhead and lock out.
            Repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                            
        ],
        [
            'image' => base_url('assets/images/workouts/Plyometric push-up.gif'),
            'category' => 'Chest',
            'name' => 'Plyometric push-up',
            'difficulty' => 'Intermediate',
            'descr' => 'Start on a well-padded surface and complete a traditional push-up.
            In an explosive motion, push up hard enough to come off the floor and stay there for a second.
            Once back on solid ground, immediately head into the next repetition.'                                                                                                                                                                                                                                                                                                                                                                                                                                        
        ],
        [
            'image' => base_url('assets/images/workouts/Dips.gif'),
            'category' => 'Chest',
            'name' => 'Dips',
            'difficulty' => 'Beginner',
            'descr' => 'Hold your body with arms locked above the equipment.
            Lower your body slowly while leaning forward, flare out your elbows.
            Raise your body above the bars until your arms are locked.'                                                                                                                                                                                                                                                                                                                                                                                                                                                               
        ],
        [
            'image' => base_url('assets/images/workouts/Incline bench press.gif'),
            'category' => 'Chest',
            'name' => 'Incline Bench Press',
            'difficulty' => 'Intermediate',
            'descr' => 'Position the bench between 30 and 45 degrees.
            Lay flat on the bench with your feet on the ground. With straight arms unrack the bar.
            Lower the bar to your mid chest.
            Raise the bar (slowly and controlled) until youve locked your elbows.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
        ],
        [
            'image' => base_url('assets/images/workouts/Dumbbell flys.gif'),
            'category' => 'Chest',
            'name' => 'Dumbbell Flys',
            'difficulty' => 'Intermediate',
            'descr' => 'Lay flat on the bench and place your feet on the ground.
            Begin the exercise with the dumbbells held together above your chest, elbows slightly bent.
            Simultaneously lower the weights to either side.
            Pause when the weights are parallel to the bench, then raise your arms to the starting position.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
        ],
        [
            'image' => base_url('assets/images/workouts/Chest press.gif'),
            'category' => 'Chest',
            'name' => 'Chest Press',
            'difficulty' => 'Beginner',
            'descr' => 'Use a handle attachment. The cables should be set to shoulder height.
            Bring both of the handles to your chest and make sure you are in the center of the cable crossover.
            Walk a few steps forward. Then press the weight forward.
            From there, you should flex and extend at both the shoulders and elbows simultaneously.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        ],
        [
            'image' => base_url('assets/images/workouts/Single-arm chest fly.gif'),
            'category' => 'Chest',
            'name' => 'Single Arm Chest Fly',
            'difficulty' => 'Beginner',
            'descr' => 'Lie on the floor with your knees bent and feet firmly on the floor, with your arms to the side of your body.
            Holding a kettlebell in one hand, keeping your arm fully extended with a slight bend in the elbow and your forearms facing upwards lift the kettlebell above your chest.
            Lower the kettlebell to the starting position and repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
        ],
        [
            'image' => base_url('assets/images/workouts/Pec fly.gif'),
            'category' => 'Chest',
            'name' => 'Pec Fly',
            'difficulty' => 'Intermediate',
            'descr' => 'Use a handle attachment set all the way to the bottom of the machine.
            Bring both of the handles to your chest and make sure you are in the center of the cable crossover.
            Walk a few steps forward. Then press the weight forward. From there, your shoulders should horizontally abduct and adduct while your elbows stay in a fixed position.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
        ],
        [
            'image' => base_url('assets/images/workouts/Walkover pushup.gif'),
            'category' => 'Chest',
            'name' => 'Walkover Pushup',
            'difficulty' => 'Intermediate',
            'descr' => 'Starting in a press up position with feet wide and one hand resting on the kettlebell, complete a full press up, lowering your chest towards the ground while keeping your body straight and returning to the starting position.
            Swap hands on the kettlebell, placing the hand originally on the kettlebell underneath your shoulder, complete another press up.
            Repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
        ],
        [
            'image' => base_url('assets/images/workouts/Push up.gif'),
            'category' => 'Chest',
            'name' => 'Push Up',
            'difficulty' => 'Beginner',
            'descr' => 'Place your hands firmly on the ground, directly under shoulders.
            Flatten your back so your entire body is straight and slowly lower your body
            Draw shoulder blades back and down, keeping elbows tucked close to your body
            Exhale as you push back to the starting position.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
        ],
        [
            'image' => base_url('assets/images/workouts/Decline push up.gif'),
            'category' => 'Chest',
            'name' => 'Decline Push-Up',
            'difficulty' => 'Beginner',
            'descr' => 'Use a bench to elevate your feet.
            Put your hands slightly wider than shoulder-width.
            Slowly lower your body until your chest almost touches the ground
            Raise your body until you almost lock your elbows.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
        ],
        [
            'image' => base_url('assets/images/workouts/Goblet squat.gif'),
            'category' => 'Quads',
            'name' => 'Goblet Squat',
            'difficulty' => 'Intermediate',
            'descr' => 'Start with a straight bar or easy bar attachment .
            Get your elbows directly underneath the bar, squat straight up and then walk back a few steps.
            Break at your knees and hips to initiate the squat. Make sure you maintain a flat back.
            Squat all the way back to a standing position.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
        ],
        [
            'image' => base_url('assets/images/workouts/Leg extension.gif'),
            'category' => 'Quads',
            'name' => 'Leg Extension',
            'difficulty' => 'Beginner',
            'descr' => 'Sit on the machine with your back against the cushion and adjust the machine you are using so that your knees are at a 90° angle at the starting position.
            Raise the weight by extending your knees outward, and then lower your leg to the starting position. Both movements should be done in a slow, controlled motion.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        ],
        [
            'image' => base_url('assets/images/workouts/Step up (Intermediate).gif'),
            'category' => 'Quads',
            'name' => 'Step Up',
            'difficulty' => 'Intermediate',
            'descr' => 'Standing up straight, using a bench as a step, raise one foot onto the bench and hold the kettlebell in the same arm as the straight leg.
            Stand and bring both feet onto the bench. Slowly lower your leg back down to the starting position.
            Repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
        ],
        [
            'image' => base_url('assets/images/workouts/Lateral lunge.gif'),
            'category' => 'Quads',
            'name' => 'Lateral Lunge',
            'difficulty' => 'Beginner',
            'descr' => 'Stand straight with your feet shoulder width apart. Keep your back straight and hold the kettlebell in front of your pelvis.
            Take a large step to one side, holding the kettlebell low and lunge into the bent leg.
            Return to the starting position and repeat'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
        ],
        [
            'image' => base_url('assets/images/workouts/Reverse lunge.gif'),
            'category' => 'Quads',
            'name' => 'Reverse Lunge',
            'difficulty' => 'Beginner',
            'descr' => 'Stand straight with your feet slightly apart and hold a kettlebell in one hand.
            Bring the same leg as the arm holding the kettlebell behind you, squat down until your back knee touches the ground, keeping your back straight.
            Return to the starting position and repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
        ],
        [
            'image' => base_url('assets/images/workouts/Heels up goblet squat.gif'),
            'category' => 'Quads',
            'name' => 'Heels Up Goblet Squat',
            'difficulty' => 'Intermediate',
            'descr' => 'Hold the weight tucked into your upper chest area, keeping your elbows in. Your feet should be slightly wider than your shoulders and the heels slightly raised on a surface.
            Sink down into the squat, keeping your elbows inside the track of your knees.
            Push through your heels while keeping your chest up and return to the starting position.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
        ],
        [
            'image' => base_url('assets/images/workouts/Split squat.gif'),
            'category' => 'Quads',
            'name' => 'Split Squat',
            'difficulty' => 'Intermediate',
            'descr' => 'You can use any attachment on this exercise. Cable should be set all to the bottom.
            Grab the attachment and walk back a few steps. Take a split stance. One leg in front and one behind.
            Break at the knees and hips to initiate the split squat. Make sure your back knee touches the floor.
            Squat back up into a standing position.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        ],
        [
            'image' => base_url('assets/images/workouts/Bulgarian split squat.gif'),
            'category' => 'Quads',
            'name' => 'Bulgarian Split Squat',
            'difficulty' => 'Intermediate',
            'descr' => 'Stand with your back to a bench (or raised surface) and place one of your feet on the bench.
            Squat down until your front leg is about parallel to the floor.
            Go back to the starting position. After completing the desired amount of reps, switch legs and repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
        ],
        [
            'image' => base_url('assets/images/workouts/Quads stretch.gif'),
            'category' => 'Quads',
            'name' => 'Quads Stretch',
            'difficulty' => 'Warm-up',
            'descr' => 'Stand perpendicular to a wall, using one arm against the wall for balance. With your other arm, grab the top of your foot.
            Pull your leg upwards and back to engage your quads, pausing at the apex of the stretch for a few seconds.
            Return to starting position and repeat with your other leg.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
        ],
        [
            'image' => base_url('assets/images/workouts/Lying leg extensions.gif'),
            'category' => 'Quads',
            'name' => 'Lying Leg Extensions',
            'difficulty' => 'Intermediate',
            'descr' => 'Kneel on the ground, with your bum on your heels. Lean backwards and slowly lower your head towards the ground, use a rack to support your descent if necessary. 
            When you feel a stretch through your quads, or begin to lose balance, explosively raise yourself back upright, ensuring you maintain a straight line from your knees to your head throughout. 
            Repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
        ],
        [
            'image' => base_url('assets/images/workouts/Romanian deadlift.gif'),
            'category' => 'Lower-back',
            'name' => 'Romanian Deadlift',
            'difficulty' => 'Intermediate',
            'descr' => 'Start with a straight bar or ez bar attachment set to the bottom of the machine. Squat the weight up into a standing position and walk a few steps back
            Push your butt back to initiate the movement and then push your butt forward until youre back in a standing position.
            To protect yourself from injury, always maintain a flat back on any exercise.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
        ],
        [
            'image' => base_url('assets/images/workouts/Back extension.gif'),
            'category' => 'Lower-back',
            'name' => '45° Back Extension',
            'difficulty' => 'Intermediate',
            'descr' => 'Position your thighs on the padding and hook your feet on the platform supports.
            Keeping your back straight, slowly bend at your waist until your legs and back are at a 45° angle.
            Slowly raise your body to the starting position.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        ],
        [
            'image' => base_url('assets/images/workouts/Staggered deadlift.gif'),
            'category' => 'Lower-back',
            'name' => 'Staggered Deadlift',
            'difficulty' => 'Beginner',
            'descr' => 'Stand with your feet shoulder width apart, shifting one foot behind you. Hold the kettlebell in both hands in front of your thighs.
            Bend forward at the hips bringing the kettlebell to the floor while you slightly bend your knees and keep your back straight.
            Return to the upright position and repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
        ],
        [
            'image' => base_url('assets/images/workouts/Kettlebell swing.gif'),
            'category' => 'Lower-back',
            'name' => 'Kettlebell Swing',
            'difficulty' => 'Intermediate',
            'descr' => 'Stand with your feet slightly wider than shoulder width apart holding the kettlebell between your legs, with your knees slightly bent.
            Keeping your back straight, swing the kettlebell upwards until the kettlebell is level with your chest and carefully lower.
            Repeat'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        ],
        [
            'image' => base_url('assets/images/workouts/Goblet good morning.gif'),
            'category' => 'Lower-back',
            'name' => 'Goblet Good Morning',
            'difficulty' => 'Beginner',
            'descr' => 'Stand with your feet shoulder width apart holding the kettlebell with both hands in front of your chest.
            Bend forward at the hips keeping your back and knees straight and the kettlebell close to your chest.
            Return to standing position and thrust your pelvis forward.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        ],
        [
            'image' => base_url('assets/images/workouts/Kickback.gif'),
            'category' => 'Lower-back',
            'name' => 'Kickback',
            'difficulty' => 'Intermediate',
            'descr' => 'Use an ankle attachment. The cable should be set to the bottom of the crossover machine.
            Push your ankle straight back, extending at the hip. Hold for a one count when you feel a contraction in your glutes.
            Then flex at the hips until you are back into your original position.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
        ],
        [
            'image' => base_url('assets/images/workouts/Pull through.gif'),
            'category' => 'Lower-back',
            'name' => 'Pull Through',
            'difficulty' => 'Intermediate',
            'descr' => 'This exercise works best with a rope attachment but can be done with anything. The attachment should be set to the bottom of the machine.
            Face away from the cable machine, straddle the cable itself, and grab the attachment. Walk a few steps away.
            Break at the hips while maintaining a flat back and mostly extended knees.
            Push hips forward until you are back in a standing position.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        ],
        [
            'image' => base_url('assets/images/workouts/Lower back stretch.gif'),
            'category' => 'Lower-back',
            'name' => 'Lower back Stretch',
            'difficulty' => 'Warm-up',
            'descr' => 'Sit on the floor with the tops of your feet pointed and flat on the ground. Move your arms out in front of you in the diving position, placing your palms flat against the ground.
            With your arms fully extended, rest your buttocks on the heels of your feet, you can crawl your hands forward to extend the stretch if need be.
            Hold the extended position for a few seconds, and return to starting position.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
        ],
        [
            'image' => base_url('assets/images/workouts/Hammer curl.gif'),
            'category' => 'Biceps',
            'name' => 'Hammer Curl',
            'difficulty' => 'Beginner',
            'descr' => 'Hold the dumbbells with a neutral grip (thumbs facing the ceiling).
            Slowly lift the dumbbell up to chest height.
            Return to starting position and repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
        ],
        [
            'image' => base_url('assets/images/workouts/Bayesian curl.gif'),
            'category' => 'Biceps',
            'name' => 'Bayesian Curl',
            'difficulty' => 'Beginner',
            'descr' => 'Use a handle attachment. The cable should be set all the way to the bottom of the machine.
            Face away from the cable machine.
            Stagger your stance so you have a better base of support. Face your palm forward. Flex at the elbow and extend.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
        ],
        [
            'image' => base_url('assets/images/workouts/Goblet curl.gif'),
            'category' => 'Biceps',
            'name' => 'Goblet Curl',
            'difficulty' => 'Beginner',
            'descr' => 'Stand up straight with a kettlebell in both hands in front of your pelvis.
            Raise the kettlebell bending your arms at the elbow until the kettlebell is level with your chest.
            Lower to the starting position and repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
        ],
        [
            'image' => base_url('assets/images/workouts/Single-arm curl.gif'),
            'category' => 'Biceps',
            'name' => 'Single Arm Curl',
            'difficulty' => 'Beginner',
            'descr' => 'Stand up straight with a kettlebell in one hand with your forearm facing out.
            Raise the kettlebell, bending your arm at the elbow and keeping your forearm vertical until your palm faces the shoulder.
            Lower to the starting position and repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
        ],
        [
            'image' => base_url('assets/images/workouts/Chin-ups.gif'),
            'category' => 'Biceps',
            'name' => 'Chin-Ups',
            'difficulty' => 'Intermediate',
            'descr' => 'Grab the bar shoulder width apart with a supinated grip (palms facing you)
            With your body hanging and arms fully extended, pull yourself up until your chin is past the bar.
            Slowly return to starting position. Repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        ],
        [
            'image' => base_url('assets/images/workouts/Preacher curl.gif'),
            'category' => 'Biceps',
            'name' => 'Preacher Curl',
            'difficulty' => 'Intermediate',
            'descr' => 'Stand behind a bench, with your chest leaning over the edge of the bench.
            With one arm resting on the bench, hold the kettlebell, bending the arm at the elbow.
            Lower your arm using the bench as a guide, keeping your forearm straight.
            Return to the starting position and repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
        ],
        [
            'image' => base_url('assets/images/workouts/Concentration curl.gif'),
            'category' => 'Biceps',
            'name' => 'Concentration Curl',
            'difficulty' => 'Intermediate',
            'descr' => 'Sitting on a chair with your legs apart, rest your arm against your thigh and hold the kettlebell with your arm extended towards the floor.
            Bending your arm at the elbow, lift the kettlebell until your palm faces your shoulder.
            Lower to the starting position and repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
        ],
        [
            'image' => base_url('assets/images/workouts/Twisting curl.gif'),
            'category' => 'Biceps',
            'name' => 'Twisting Curl',
            'difficulty' => 'Hard',
            'descr' => 'Use a handle attachment. The cable should be set all the way to the bottom of the machine.
            Face away from the cable machine. Stagger your stance so you have a better base of support.
            Start with a neutral grip. Flex at the elbow. While flexing twist your palm. When you hit the top of the movement your palm should be facing upward.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
        ],
        [
            'image' => base_url('assets/images/workouts/Reverse curl.gif'),
            'category' => 'Biceps',
            'name' => 'Reverse Curl',
            'difficulty' => 'Intermediate',
            'descr' => 'Use a handle attachment. The cable should be set all the way to the bottom of the machine.
            Face away from the cable machine. Stagger your stance so you have a better base of support.
            Face your palm downwards. Flex at the elbow and extend.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
        ],
        [
            'image' => base_url('assets/images/workouts/Inverted Row.gif'),
            'category' => 'Biceps',
            'name' => 'Inverted Row',
            'difficulty' => 'Beginner',
            'descr' => 'Lay underneath a fixed horizontal bar and grab the bar with a wide overhand grip.
            Pull your body straight up to the bar.
            Return to the starting position, your arms fully extended. Repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        ],
        [
            'image' => base_url('assets/images/workouts/Biceps stretch.gif'),
            'category' => 'Biceps',
            'name' => 'Biceps Stretch',
            'difficulty' => 'Warm-up',
            'descr' => 'Stand one foot in front of the other with the wall to your right, an arms width away.
            Place your hand on the wall, fingers pointing away from you.
            Gently lean forward, keeping your hand stationary.
            Repeat with the other arm.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
        ],
        [
            'image' => base_url('assets/images/workouts/Reverse-Grip Bent-Over Row.gif'),
            'category' => 'Biceps',
            'name' => 'Reverse-Grip Bent-Over Row',
            'difficulty' => 'Hard',
            'descr' => 'Grab a barbell with an underhand grip that is about shoulder-width apart. Assume the proper bent-over row position, with the back flat and chest up. 
            Row the barbell to the stomach. 
            Pull with both the back and the arms, lowering the weight under control and repeating for reps.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
        ],
        [
            'image' => base_url('assets/images/workouts/Cable push down.gif'),
            'category' => 'Triceps',
            'name' => 'Cable Push Downs',
            'difficulty' => 'Beginner',
            'descr' => 'Grip the pulley bar with palms facing down at shoulder width.
            Stand straight with a small forward incline. Keep your upper arms close to your body, and slowly bring the pulley bar down until your arms are fully extended.
            Pause when you are at the contracted position of the motion, then slowly raise the pulley bar back to the starting point.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
        ],
        [
            'image' => base_url('assets/images/workouts/Lying triceps extension.gif'),
            'category' => 'Triceps',
            'name' => 'Lying Triceps Extensions',
            'difficulty' => 'Intermediate',
            'descr' => 'Lay on a flat bench while holding a barbell with a shoulder-width grip.
            Fully extend your elbows until the barbell is directly over your chest.
            Begin to flex your elbows and allow the barbell to nearly touch your forehead.
            Extend your elbows back to the starting position and repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
        ],
        [
            'image' => base_url('assets/images/workouts/Close grip bench press.gif'),
            'category' => 'Triceps',
            'name' => 'Close Grip Bench Press',
            'difficulty' => 'Intermediate',
            'descr' => 'Lay flat on the bench with your feet on the ground. With a narrow grip on the bar, straighten your arms
            Lower the bar to your lower-mid chest
            Slowly raise the bar until you’ve locked your elbows.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
        ],
        [
            'image' => base_url('assets/images/workouts/Skull crusher.gif'),
            'category' => 'Triceps',
            'name' => 'Skullcrusher',
            'difficulty' => 'Intermediate',
            'descr' => 'You can use a straight bar, rope, easy bar, or two handles. The cable should be set all the way to the top of the machine.
            Face away from the machine with your elbows up and the attachment just behind your head.
            Extend at the elbows until you feel a contraction in your triceps and then flex at the elbow back to the starting position.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
        ],
        [
            'image' => base_url('assets/images/workouts/Cross pushdown.gif'),
            'category' => 'Triceps',
            'name' => 'Cross Pushdown',
            'difficulty' => 'Intermediate',
            'descr' => 'Either use two handles or no attachment at all. Both sides of the cable crossover should be set to the top.
            Stand in the center of the machine holding each Cable in the opposing hand. Your upper arm should be at a 45-degree angle with your torso.
            Extend your elbows until you feel a contraction and then return to the starting position'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
        ],
        [
            'image' => base_url('assets/images/workouts/Elevated pike press.gif'),
            'category' => 'Triceps',
            'name' => 'Elevated Pike Press',
            'difficulty' => 'Intermediate',
            'descr' => 'Use a bench or an object to elevate your feet.
            Lower your head towards the floor by bending your elbows.
            Push through your hands and return to the starting pike position.
            Repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        ],
        [
            'image' => base_url('assets/images/workouts/Overhead triceps extension.gif'),
            'category' => 'Triceps',
            'name' => 'Overhead Triceps Extension',
            'difficulty' => 'Intermediate',
            'descr' => 'You can use any attachment. The cable should be all the way to the bottom of the machine. Face away from the machine.
            Point your elbows straight up toward the ceiling.
            From there, extend your elbows until your fists are pointed straight toward the ceiling.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
        ],
        [
            'image' => base_url('assets/images/workouts/Seated triceps extension.gif'),
            'category' => 'Triceps',
            'name' => 'Seated Triceps Extensions',
            'difficulty' => 'Intermediate',
            'descr' => 'Sit on the bench and hold a dumbbell with both hands. Raise the dumbbell overhead at arms length, holding the weight up with the palms of your hands.
            Keep your elbows in while you lower the weight behind your head, your upper arms stationary.
            Raise the weight back to starting position.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
        ],
        [
            'image' => base_url('assets/images/workouts/Triceps stretch.gif'),
            'category' => 'Triceps',
            'name' => 'Triceps Stretch',
            'difficulty' => 'Warm-up',
            'descr' => 'Use the opposite hand to gently apply pressure to the elbow.
            Hold the stretch for a few seconds then repeat with the other arm.
            Raise your left arm above your head, and bend at the elbow so your hand is resting at the top of your back.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
        ],
        [
            'image' => base_url('assets/images/workouts/Bent over barbell row.gif'),
            'category' => 'Lats',
            'name' => 'Bent Over Barbell Row',
            'difficulty' => 'Intermediate',
            'descr' => 'Grab a barbell with a shoulder width pronated or supinated grip.
            Bend forward at your hips while maintaining a flat back.
            Pull the weight toward your upper abdomen.
            Lower the weight in a controlled manner and repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
        ],
        [
            'image' => base_url('assets/images/workouts/Dumbbell row.gif'),
            'category' => 'Lats',
            'name' => 'Dumbbell Row',
            'difficulty' => 'Intermediate',
            'descr' => 'Place your right leg on the top end of the bench so that your knee and shin rest flat on the bench, your foot hanging off the end.
            Bend your torso towards the floor and support yourself with your right arm by placing your palm flat against the bench.
            Grip the weight with your left and, and pull it straight up to the side of your chest. Repeat the motion.
            Switch the supporting leg and arm to work the other side.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
        ],
        [
            'image' => base_url('assets/images/workouts/Seated cable row.gif'),
            'category' => 'Lats',
            'name' => 'Seated Cable Row',
            'difficulty' => 'Beginner',
            'descr' => 'Sit with your back straight on the machine and grip the handles.
            Pull the handles back using your arms. Your legs and torso should be at a 90° angle. Push out your chest.
            Pull the handles towards your body until your hands are beside your abdomen.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
        ],
        [
            'image' => base_url('assets/images/workouts/Lat prayer.gif'),
            'category' => 'Lats',
            'name' => 'Lat Prayer',
            'difficulty' => 'Hard',
            'descr' => 'You can use any attachment. Cable should be set all the way to the top of the machine.
            Grab your attachment and walk a few steps back. Push your butt back to where you are leaning forward. Your ears should be between your arms.
            Initiate the movement with your shoulders and not your elbows. As you flex at the shoulder joint push your hips forward until your hips meet the attachment.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
        ],
        [
            'image' => base_url('assets/images/workouts/Single-arm row.gif'),
            'category' => 'Lats',
            'name' => 'Single Arm Row',
            'difficulty' => 'Beginner',
            'descr' => 'Stand with your feet shoulder width apart, shifting one foot behind you. Hold the kettlebell in the same hand as the leg shifted backwards.
            Bend forwards at the hips bringing the kettlebell to the floor while you slightly bend your knee, keeping your back straight.
            Lift the kettlebell upwards towards your chest and lower - repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
        ],
        [
            'image' => base_url('assets/images/workouts/Lat stretch.gif'),
            'category' => 'Lats',
            'name' => 'Lats Stretch',
            'difficulty' => 'Warm-up',
            'descr' => 'Place both hands on the wall in front of you.
            Slowly lower your body until you feel the stretch.
            Hold at the bottom of the stretch, return to starting position.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        ],
        [
            'image' => base_url('assets/images/workouts/Pull up hangs.gif'),
            'category' => 'Lats',
            'name' => 'Pull Up Hangs',
            'difficulty' => 'Intermediate',
            'descr' => 'Grip the overhead bar with an overhand grip (palms facing away from you). Aim to keep your arms shoulder-width apart.
            Pull yourself up with arms slightly bent, remain in that position as long as possible.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
        ],
        [
            'image' => base_url('assets/images/workouts/Gorilla row.gif'),
            'category' => 'Lats',
            'name' => 'Gorilla Row',
            'difficulty' => 'Intermediate',
            'descr' => 'Get your feet shoulder-width apart with two kettlebells between them. Hinge at the hip until youre able to grab the handles of the kettlebells. This should put you in a deadlift position.
            Row one of the kettlebells up towards your hips with a slight rotation in order to allow your elbows to come back farther. Keep a tight grip on the other kettlebell thats still stationary on the ground.
            Return the kettlebell back to the ground and repeat on the other side. Keep your back flat and head neutral.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
        ],
        [
            'image' => base_url('assets/images/workouts/Band bent-over row.gif'),
            'category' => 'Traps mid-back',
            'name' => 'Band Bent-Over Row',
            'difficulty' => 'Beginner',
            'descr' => 'Grab a low-resistance band and set it out on the ground. Stand on the middle of the band, grabbing the two ends in either hand.
            Make sure that your back is not rounded.
            Squeeze your back to pull the band ends simultaneously to your chest, or as close as the band allows. 
            Pause for a moment at the top of the motion, and then slowly return to the original position. Repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        ],
        [
            'image' => base_url('assets/images/workouts/Behind the back barbell wrist curl.gif'),
            'category' => 'Forearms',
            'name' => 'Behind The Back Barbell Wrist Curl',
            'difficulty' => 'Intermediate',
            'descr' => 'Stand straight and hold the barbell behind you using a pronated grip with your hands and feet shoulder-width apart.
            Slowly curl your wrists in a semi-circular motion upwards.
            Hold the barbell at the apex of the motion and then slowly lower the barbell back down to starting position.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
        ],
        [
            'image' => base_url('assets/images/workouts/Wrist extension.gif'),
            'category' => 'Forearms',
            'name' => 'Wrist Extension',
            'difficulty' => 'Hard',
            'descr' => 'Use a handle attachment. The cable should be set all the way to the bottom of the machine.
            Face away from the cable machine. Stagger your stance so you have a better base of support.
            Start with your elbow at a 90° angle with your palm facing down. Flex and extend at the wrist.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
        ],
        [
            'image' => base_url('assets/images/workouts/Farmers carry.gif'),
            'category' => 'Forearms',
            'name' => 'Farmer’s Carry',
            'difficulty' => 'Beginner',
            'descr' => 'Standing straight with a kettlebell in one hand, lift the knee of one leg off the floor to knee height.
            Bring the leg back to standing and repeat with the other leg, keeping the kettlebell on the same side.
            Repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
        ],
        [
            'image' => base_url('assets/images/workouts/Dead hangs.gif'),
            'category' => 'Forearms',
            'name' => 'Dead hangs',
            'difficulty' => 'Beginner',
            'descr' => 'Grip the bar and hold yourself there for as long as possible, with your elbows slightly bent.
            Squeeze your shoulders blade together and down to engage your lats. Keep your core tight throughout the exercise.
            This helps develop grip strength and is easier than doing pull-ups.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
        ],
        [
            'image' => base_url('assets/images/workouts/Forearm pull.gif'),
            'category' => 'Forearms',
            'name' => 'Forearm Pull',
            'difficulty' => 'Beginner',
            'descr' => 'Hold the weight bar of a pulley machine at shoulder level, with your palms facing down.
            Draw your upper arms in toward the side of your torso.
            Push the weight all the way down.
            Pause, then return to the starting position.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
        ],
        [
            'image' => base_url('assets/images/workouts/Seated DB shrugs.gif'),
            'category' => 'Traps',
            'name' => 'Seated DB Shrugs',
            'difficulty' => 'Beginner',
            'descr' => 'Sit on a bench with dumbbells in both hands, palms facing your body, back straight.
            Elevate your shoulders and hold the contracted position at the apex of the motion.
            Slowly lower your shoulders back to starting position.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
        ],
        [
            'image' => base_url('assets/images/workouts/Standing Smith Machine shrugs.gif'),
            'category' => 'Traps',
            'name' => 'Standing Smith Machine Shrugs',
            'difficulty' => 'Beginner',
            'descr' => 'Place the bar on a lower rung so that when gripped your arms are fully extended and your back is straight.
            Grip at shoulder width, raise the bar with your shoulders and pause at the contracted position.
            Slowly lower the bar back to starting position.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
        ],
        [
            'image' => base_url('assets/images/workouts/Incline shrug.gif'),
            'category' => 'Traps',
            'name' => 'Incline Shrug',
            'difficulty' => 'Beginner',
            'descr' => 'Leaning across the back section of the bench, with feet firmly on the floor and with arms hanging to the sides.
            Holding the kettlebell in both hands engage your shoulder blades, as if you are trying to touch them together. Release the shrug.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
        ],
        [
            'image' => base_url('assets/images/workouts/Upright row.gif'),
            'category' => 'Traps',
            'name' => 'Upright Row',
            'difficulty' => 'Intermediate',
            'descr' => 'Stand with your feet shoulder width apart holding the kettlebell with both hands in front of your thighs.
            Bend forward at the hips bringing the kettlebell to the floor while you slightly bend your knees, keeping your back straight.
            Lift the kettlebell upwards towards your chest and lower - repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        ],
        [
            'image' => base_url('assets/images/workouts/Traps stretch.gif'),
            'category' => 'Traps',
            'name' => 'Traps Stretch',
            'difficulty' => 'Warm-up',
            'descr' => 'Stand upright with your feet shoulder width apart.
            Place your left hand on your head and gently pull your head down towards your left shoulder. Then return to center point.
            Repeat, using your right hand pulling towards your right shoulder.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
        ],
        [
            'image' => base_url('assets/images/workouts/Hamstring cable curl.gif'),
            'category' => 'Hamstrings',
            'name' => 'Hamstring Cable Curl',
            'difficulty' => 'Beginner',
            'descr' => 'Use an ankle attachment with the cable set all the way to the bottom of the machine.
            Stand upright or try bending slightly forward.
            Flex at the knee and pull your ankle straight back.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
        ],
        [
            'image' => base_url('assets/images/workouts/Hamstring kickbacks.gif'),
            'category' => 'Hamstrings',
            'name' => 'Hamstring Kickbacks',
            'difficulty' => 'Beginner',
            'descr' => 'Get down on all fours and position your hands under your shoulders and your knees under your hips.
            Kick back with one leg and squeeze your glutes.
            Slowly return to starting position by bending your knee and lowering your leg.
            Switch Legs. Repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
        ],
        [
            'image' => base_url('assets/images/workouts/Hamstring stretch.gif'),
            'category' => 'Hamstrings',
            'name' => 'Hamstrings Stretch',
            'difficulty' => 'Warm-up',
            'descr' => 'Lie down with your legs reaching up the wall. Your bum should be slightly off the floor.
            Bend one leg and leave the other outstretched.
            Push your thigh towards the wall.
            Hold the stretch for a few seconds then return to starting position.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
        ],
        [
            'image' => base_url('assets/images/workouts/Dumbbell donkey kicks.gif'),
            'category' => 'Hamstrings',
            'name' => 'Dumbbell Donkey Kicks',
            'difficulty' => 'Intermediate',
            'descr' => 'Begin on all fours with your hands and knees shoulder-width apart. Place one lightweight dumbbell in the crease of the back of your right knee until it is securely positioned.
            Keeping your knee bent at a 90-degree angle, lift your right leg up and back as high as you can with your right foot kicking up toward the ceiling. Engage your core to keep your back from arching.
            Lower the leg by reversing the movement to return to the starting position. 
            Repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
        ],
        [
            'image' => base_url('assets/images/workouts/Stability ball hamstring curls.gif'),
            'category' => 'Hamstrings',
            'name' => 'Stability Ball Hamstring Curls',
            'difficulty' => 'Beginner',
            'descr' => 'Lie on your back with your arms out to your sides, palms facing down. Bend your knees and place your feet up on the stability ball about hip-width apart.
            Squeeze your glutes and hamstrings to lift your hips off the ground until your body forms a straight line from your shoulders to your knees. 
            Engaging your core, extend your legs straight out, rolling the ball away from you.
            Bend your knees to roll the ball back in, all while keeping your hips lifted as high as you can. Lower your hips back down to the ground.
            Repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
        ],
        [
            'image' => base_url('assets/images/workouts/Kettlebell swing (Intermediate).gif'),
            'category' => 'Hamstrings',
            'name' => 'Kettlebell Swing',
            'difficulty' => 'Intermediate',
            'descr' => 'Make a triangle with your arms holding a kettlebell with your hands.
            With a soft bend in your knees, hinge forward at your hips and hike the bell high up in your groin area while thrusting hips forward.
            Once the bell reaches about chest height, let the bell drop on its own.
            Repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        ],
        [
            'image' => base_url('assets/images/workouts/Barbell overhead press.gif'),
            'category' => 'Traps',
            'name' => 'Overhead Press',
            'difficulty' => 'Intermediate',
            'descr' => 'Stand with your body upright and core muscles braced, looking straight ahead. Hold the bar on your upper chest, gripping it with hands just wider than shoulder-width apart.
            Press the bar directly overhead. Do not tilt your hips forward during the move.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        ],
        [
            'image' => base_url('assets/images/workouts/Lean back row.gif'),
            'category' => 'Lats',
            'name' => 'Standing Lean Back Row',
            'difficulty' => 'Intermediate',
            'descr' => 'Stand in front of the ropes and lean back to about a 45 degree angle.
            Extend your arms fully and then pull yourself back up while still leaning.
            Repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        ],
        [
            'image' => base_url('assets/images/workouts/Contralateral limb raise.gif'),
            'category' => 'Traps mid-back',
            'name' => 'Contralateral Limb Raise',
            'difficulty' => 'Beginner',
            'descr' => 'Lay with your arms outstretched, palms down in front of you, and your legs outstretched with your soles facing up. Simultaneously lift your right arm and left leg off the floor.
            When you reach your flexion point, hold for a second before slowly lowering back down to the floor.
            Repeat.'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        ]
        ];
		
        $this->db->table('workouts')->insertBatch($data);
    }
}
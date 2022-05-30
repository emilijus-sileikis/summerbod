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
            'image' => base_url('assets/images/workouts/Traps stretch (mid).gif'),
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
        ]
        ];
		
		
		
		
        $this->db->table('workouts')->insertBatch($data);
    }
}
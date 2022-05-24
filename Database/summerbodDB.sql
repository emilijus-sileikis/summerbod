set global net_buffer_length=1000000; 
set global max_allowed_packet=1000000000;

CREATE TABLE user_info
(
id INT NOT NULL AUTO_INCREMENT,
name VARCHAR(12) NOT NULL,
pass VARCHAR(20) NOT NULL,
email VARCHAR(320) NOT NULL,
PRIMARY KEY (id)
);
CREATE TABLE user_workouts
(
user_workoutid INT NOT NULL AUTO_INCREMENT,
user_id INT NOT NULL,
user_image VARCHAR(273200) NOT NULL,
user_category ENUM('Traps', 'Traps mid-back', 'Shoulders', 'Chest', 'Biceps', 'Forearms', 'Abdominals', 'Quads', 'Calves', 'Triceps', 'Lats', 'Lower-back', 'Glutes', 'Hamstrings') NOT NULL,
user_name VARCHAR(30) NOT NULL,
user_difficulty ENUM('Beginner', 'Intermediate', 'Hard', "Warm-up") NOT NULL,
user_descr VARCHAR(500) NOT NULL,
PRIMARY KEY (user_workoutid),
FOREIGN KEY (user_id) REFERENCES user_info(id)
);
CREATE TABLE workouts
(
id INT NOT NULL AUTO_INCREMENT,
image VARCHAR(2732) NOT NULL,
category ENUM('Traps', 'Traps mid-back', 'Shoulders', 'Chest', 'Biceps', 'Forearms', 'Abdominals', 'Quads', 'Calves', 'Triceps', 'Lats', 'Lower-back', 'Glutes', 'Hamstrings') NOT NULL,
name VARCHAR(30) NOT NULL,
difficulty ENUM('Beginner', 'Intermediate', 'Hard', "Warm-up") NOT NULL,
descr VARCHAR(500) NOT NULL,
PRIMARY KEY (id)
);
CREATE TABLE question
(
id INT NOT NULL AUTO_INCREMENT,
text VARCHAR(200) NOT NULL,
PRIMARY KEY (id)
);
CREATE TABLE answer
(
id INT NOT NULL AUTO_INCREMENT,
text VARCHAR(30) NOT NULL,
question_id INT NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (question_id) REFERENCES question(id)
);
CREATE TABLE correct_answer
(
question_id INT REFERENCES question(id),
answer_id INT REFERENCES answer(id),
PRIMARY KEY (question_id, answer_id)
);

INSERT INTO `user_info` (`id`, `name`, `pass`, `email`) VALUES (NULL, 'Emilij', 'xxxemilij', 'emilij@gmail.com');
INSERT INTO `user_info` (`id`, `name`, `pass`, `email`) VALUES (NULL, 'Patrik', 'xxxpatrik', 'patricia@yahoo.ru');

---ABDOMINALS---

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Abdominals', 'Tuck jump', 'Intermediate', 
'Stand with your knees slightly bent, then jump up as high as possible.
Bring your knees in toward your chest while extending your arms straight out.
Land with your knees slightly bent and quickly jump again.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Abdominals', 'Plank to push-up', 'Intermediate', 
'Start in a plank position.
Place one hand at a time on the floor to lift into a push-up position with your back straight and core engaged.
Move one arm at a time back into the plank position (forearms on the floor).
Repeat, alternating your arm that makes the first move.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Abdominals', 'L seat', 'Intermediate', 
'Sit with your legs extended and your feet flexed.
Place your hands on the floor and slightly round your torso.
Lift your hips off the floor, hold for 5 seconds, and release.
Repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Abdominals', 'Rotational push-up', 'Intermediate', 
'After coming back up into a starting push-up position, rotate your body to the right and extend your right hand overhead, forming a T with your arms and torso.
Return to the starting position
Do a regular push-up, and then rotate to the left.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Abdominals', 'Flutter kick', 'Intermediate', 
'Lie faceup with your arms at your sides and your palms facing down.
With your legs extended, lift your heels about 6 inches off the floor.
Make small, quick, up-and-down pulses with your legs while keeping your core engaged.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Abdominals', 'Side plank', 'Intermediate', 
'Lie faceup and roll to the side.
Come up onto one foot and elbow.
Make sure your hips are lifted and your core is engaged.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Abdominals', 'Russian twist', 'Intermediate', 
'Sit on the floor with your knees bent and feet together, lifted a few inches off the floor.
With your back at a 45-degree angle to the floor, move your arms from side to side in a twisting motion.
The slower it is performed, the deeper the burn.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Abdominals', 'Bicycle', 'Beginner', 
'Lie faceup with your knees bent and your hands behind your head.
Bring your knees in toward your chest.
Bring your right elbow toward your left knee as your right leg straightens.
Continue alternating sides like you’re pedaling a bike.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Abdominals', 'Segmental rotation', 'Beginner', 
'Lying faceup with your knees bent and core tight, let your knees fall gradually to the left until you feel a good stretch.
Hold for 5 seconds, then return to the center.
Repeat on the right.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Abdominals', 'Single-leg abdominal press', 'Intermediate', 
'Lie faceup with your knees bent and your feet flat on the floor.
Tighten your abs and raise your right leg, with your knee bent at a 90-degree angle.
Push your right hand on top of your lifted knee, using your core to create pressure between your hand and knee.
Hold for 5 seconds, then lower back down.
Repeat with your left hand and knee.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Abdominals', 'Sprinter situp', 'Intermediate', 
'Lie faceup with your legs straight and your arms by your sides with your elbows bent at a 90-degree angle.
Now, sit up and bring your left knee toward your right elbow. Return to the starting position.
Repeat on the other side.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Abdominals', 'Sprinter situp', 'Intermediate', 
'Lie faceup with your legs straight and your arms by your sides with your elbows bent at a 90-degree angle.
Now, sit up and bring your left knee toward your right elbow. Return to the starting position.
Repeat on the other side.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Abdominals', 'Crunches', 'Beginner', 
'Lie down on your back, with your feet on the floor, knees bent. Place your hands on either side of your head in a comfortable position. 
Bend your hips and waist to raise your body off the ground. Lower your body back to the ground into the starting position.');


---GLUTES---

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Glutes', 'Shoulder bridge', 'Beginner', 
'Lie faceup with your knees bent and your feet hip-width apart.
Place your arms at your sides and lift your spine and hips. Only your head, feet, arms, and shoulders should be on the floor.
Lift one leg, keeping your core tight.
Slowly bring your leg back down, then lift back up.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Glutes', 'Burpee', 'Beginner', 
'This one starts in a low squat position with your hands on the floor.
Next, kick your feet back to a push-up position.
Complete one push-up, then immediately return your feet to the squat position.
Leap up as high as possible before squatting and moving back into the push-up portion of the show.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Glutes', 'Wall sit', 'Beginner', 
'Slowly slide your back down a wall until your thighs are parallel to the floor.
Make sure your knees are directly above your ankles and keep your back straight.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Glutes', 'Clock lunge', 'Hard', 
'Complete a traditional forward lunge, then take a big step to the right and lunge again.
Finish off the semicircle with a backward lunge, then return to standing.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Glutes', 'Lunge to row', 'Hard', 
'Start by doing a normal lunge.
Instead of bringing your forward leg back to the starting position, raise it off the floor while lifting your arms overhead.
Your leg should remain bent at about 90 degrees.
Add weights as needed.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Glutes', 'Pistol squat', 'Intermediate', 
'Stand holding your arms straight out in front of your body.
Raise your right leg, flexing your right ankle and pushing your hips back.
Lower your body while keeping your right leg raised.
Hold, then return to standing.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Glutes', 'Pistol squat', 'Intermediate', 
'Stand with your feet together and lunge forward with your right foot.
Jump straight up, propelling your arms forward while keeping your elbows bent.
While in the air, switch legs and land in a lunge with your opposite leg forward.
Repeat and continue switching legs.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Glutes', 'Curtsy lunge', 'Intermediate', 
'When lunging, step your left leg back behind your right leg, bending your knees.
Lower your hips until your right thigh is almost parallel to the floor.
Remember to keep your torso upright and your hips square.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Glutes', 'Single-leg deadlift', 'Hard', 
'Start in a standing position with your feet together.
Lift your right leg slightly.
Lower your arms and torso while raising your right leg behind you.
Keep your left knee slightly bent and reach your arms as close to the floor as possible.
Raise your torso while lowering your right leg.
Switch legs.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Glutes', 'Calf raise', 'Intermediate', 
'From a standing position, slowly rise up on your toes, keeping your knees straight and heels off the floor.
Hold briefly, then come back down.
Try standing on something elevated to achieve full range of motion.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Glutes', 'Conventional deadlift', 'Intermediate', 
'Stand next to the racked bar. Push your hips back as you reach down for the bar.
Once you have made contact with the bar, secure your grip and engage your abdominals while lifting the bar up to your waist.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Glutes', 'Barbell Glute Bridge', 'Intermediate', 
'Roll the barbell towards you, so it’s sitting on your hips. Place your upper back on a bench and bend your knees with your feet flat on the floor. 
Squeeze your glutes and drive your hips up, holding onto the barbell with both hands to prevent it from falling until your body is in a straight line from knee to chin. 
Hold this position for a beat and then lower the weight back down');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Glutes', 'Belt Squat', 'Hard', 
'Load the belt with desired weight plates. Set the belt around your hip, brace your core, and lift the weight. Release the weight pin and get yourself into position. 
With your chest up, squat down until the bottoms of your thighs are parallel to the floor. 
Now, drive back up by pushing your feet through the platform.');


---CALVES---

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Calves', 'Seated Calf Raises', 'Intermediate', 
'Get comfortable on the machine, then place your lower thighs beneath the padded lever. Place your toes and the balls of your feet onto the foot supports.
Prevent the weight from slipping forward by gripping the handles, and release the safety bar. Lower the weight until your calves are extended.
Push your heels up to lift the padded lever and hold the contracted position, then slowly lower back down to the starting position. Repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Calves', 'Barbell Calf Raises', 'Intermediate', 
'Place the bar on your back
Start with feet flat on the ground
Extend your heels upwards while keeping your knees stationary, and pause at the contracted position.
Slowly return to the starting position. Repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Calves', 'Standing Calf Raises', 'Intermediate', 
'Adjust the machine in accordance with your height and place your shoulders underneath the padded lever.
The balls of your feet should be supporting your weight on the calve block, your heels extending off of it.
Extend your heels upwards while keeping your knees stationary, and pause at the contracted position.
Slowly return to the starting position. Repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Calves', 'Single Leg Calf Raise', 'Intermediate', 
'Sitting comfortably on a chair with your core stomach muscles engaged, place your feet on the floor.
Place the kettlebell on your legs, just above the knees and raise your heels upwards off the floor.
Pause when your heels are fully extended and then slowly return to the starting position and repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Calves', 'Walking Calf Raises', 'Beginner', 
'Walk forward and push your toe into the ground.
Lift you heel off the ground each step and tense your calf muscle.
Repeat on each leg and walk forward slowly.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Calves', 'Calves Stretch', 'Warm-up', 
'Place the ball of your foot against the wall with your heel on the ground. Place your hands on the wall in front of your shoulders.
Keeping your knee straight, slowly lean towards the wall, pause for a few seconds when you feel the stretch extending through your calf muscle.
Return to the starting position, and repeat the stretch with your other leg.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Calves', 'Seated Calf Raise (Leg Press Machine)', 'Beginner', 
'Sit at the leg press machine in a manner where just the top part of each foot is touching the bottom of the platform in front of you
Push back as far as you can while keeping your toes connected to the platform
Return and repeat');


---SHOULDERS---

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Shoulders', 'Mountain climber', 'Intermediate', 
'Start on your hands and knees.
Bring your left foot forward to directly under your chest while straightening your right leg.
Keeping your hands on the floor and your core tight, jump and switch legs.
Your left leg should now be extended behind you, with your right knee forward.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Shoulders', 'Handstand push-up', 'Hard', 
'Get set in a handstand position against a wall.
Bend your elbows at a 90-degree angle, doing an upside-down push-up so your head moves toward the floor and your legs remain against the wall.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Shoulders', 'Barbell Overhead Press', 'Intermediate', 
'Put the bar on the heel of your palm because this is where you’ll generate the most force from.  Press overhead until lockout and slowly lower down to the starting position and repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Shoulders', 'Half-Kneeling Landmine Press', 'Intermediate', 
'Hold the barbell at shoulder height in hand nearest your back leg and actively grip the barbell. Press up at about 45 degrees and reach towards the ceiling at the end of the lockout. 
Slowly lower down under control and repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Shoulders', 'Arnold Press', 'Intermediate', 
'In a seated position, kick dumbbells up to a traditional starting position and rotate your hands until your palms are facing towards you.
In one motion, press the dumbbells and rotate your palms to face forward. Continue lifting until your biceps are by or behind your ears.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Shoulders', 'Push Press', 'Hard', 
'Assume an upright torso position and dip downward until your knees exceed over toes. 
Then push your torso and chest upwards through the barbell, and using the legs, forcefully drive yourself and the barbell up.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Shoulders', 'Bottoms-Up Kettlebell Press', 'Beginner', 
'Grab a lighter kettlebell bottoms up.
Press up keeping the kettlebell facing directly upwards and your elbow underneath the center of mass of the kettlebell. 
Lockout with the bell in this position and the biceps close to the ear.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Shoulders', 'Wide-Grip Seated Row', 'Intermediate', 
'Take an overhand wide grip until your upper arms are about 45 degrees to your torso. 
Keeping an upright torso, row the bar to your sternum until you feel a strong contraction in your upper back. 
Slowly return to the starting position and repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Shoulders', 'Leaning Lateral Raise', 'Intermediate', 
'Hold a power rack or a pole and bring your feet close to or under your hands. 
With the dumbbell resting on your outer thigh, raise the dumbbell away from you until you feel a strong contraction in your shoulders and slowly lower down and repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Shoulders', 'Incline Y Raise', 'Intermediate', 
'Set up the bench at a 45-degree incline. Lie face down with your knees slightly bent. 
Hold the weights with an overhand grip. Extend your arms to hang straight under your shoulders. 
Activate your posterior delts to raise the weights up and out. Keep your arms straight until they are fully extended.
Reset and repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Shoulders', 'Seated Dumbbell Shoulder Press', 'Intermediate', 
'Sit upright on an incline bench and lift up both dumbbells so they are sitting on your shoulders. 
Keep your shoulders away from your ears.
Press both dumbbells overhead until your elbows lock out.
Reset and repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Shoulders', 'Barbell Overhead Carry', 'Intermediate', 
'Place your hands slightly wider than shoulder-width. 
Press the barbell overhead. 
Position your biceps behind your ears.
Take slow, deliberate steps for your preffered amount of time.
Repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Shoulders', 'Dumbbell Lateral Raise Pause Set', 'Intermediate', 
'Hold a pair of dumbbells by your side. Keep your shoulders down and chest up. 
Perform six lateral raises with your elbows slightly bent. 
Don’t raise the dumbbells above shoulder height. 
On the sixth rep, hold the weights in the contracted position for six seconds. 
Continue this rep/pause sequence down to one rep and one second.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Shoulders', 'Single-Arm Push Press', 'Intermediate', 
'Clean one dumbbell to the top of your shoulder. 
Pack your shoulders down and away from your ears. Brace your core. 
Bend your knees to dip down until your knees exceed your toes.
Press the dumbbell overhead and lock out.
Repeat.');


---CHEST---


INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Chest', 'Plyometric push-up', 'Intermediate', 
'Start on a well-padded surface and complete a traditional push-up.
In an explosive motion, push up hard enough to come off the floor and stay there for a second.
Once back on solid ground, immediately head into the next repetition.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Chest', 'Contralateral limb raise', 'Intermediate', 
'Lie facedown with your arms outstretched and your palms facing each other.
Slowly lift one arm a few inches off the floor, keeping it straight without rotating your shoulders and keeping your head and torso still.
Hold the position, then lower your arm back down. Repeat on the other side.
For an extra challenge, lift your opposite leg a few inches off the floor at the same time.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Chest', 'Judo push-up', 'Intermediate', 
'From a push-up position, raise your hips.
Use your arms to lower the front of your body until your chin comes close to the floor.
Swoop your head and shoulders upward and lower your hips down, keeping your knees off the floor.
Reverse the move to come back to your raised-hip position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Chest', 'Dips', 'Beginner', 
'Hold your body with arms locked above the equipment.
Lower your body slowly while leaning forward, flare out your elbows.
Raise your body above the bars until your arms are locked.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Chest', 'Incline Bench Press', 'Intermediate', 
'Position the bench between 30 and 45 degrees.
Lay flat on the bench with your feet on the ground. With straight arms unrack the bar.
Lower the bar to your mid chest.
Raise the bar (slowly and controlled) until youve locked your elbows.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Chest', 'Dumbbell Flys', 'Intermediate', 
'Lay flat on the bench and place your feet on the ground.
Begin the exercise with the dumbbells held together above your chest, elbows slightly bent.
Simultaneously lower the weights to either side.
Pause when the weights are parallel to the bench, then raise your arms to the starting position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Chest', 'Chest Press', 'Beginner', 
'Use a handle attachment. The cables should be set to shoulder height.
Bring both of the handles to your chest and make sure you are in the center of the cable crossover.
Walk a few steps forward. Then press the weight forward.
From there, you should flex and extend at both the shoulders and elbows simultaneously.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Chest', 'Single Arm Press', 'Beginner', 
'Laying on the floor with your knees bent and feet firmly on the floor, leave one arm resting to the side of the body.
Using the other arm, hold the kettlebell at arms length directly upwards of your shoulder.
Lower your arm until your upper arm to elbow is resting on the floor.
Return to starting position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Chest', 'Single Arm Chest Fly', 'Beginner', 
'Lie on the floor with your knees bent and feet firmly on the floor, with your arms to the side of your body.
Holding a kettlebell in one hand, keeping your arm fully extended with a slight bend in the elbow and your forearms facing upwards, lift the kettlebell above your chest.
Lower the kettlebell to the starting position and repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Chest', 'Pec Fly', 'Intermediate', 
'Use a handle attachment set all the way to the bottom of the machine.
Bring both of the handles to your chest and make sure you are in the center of the cable crossover.
Walk a few steps forward. Then press the weight forward. From there, your shoulders should horizontally abduct and adduct while your elbows stay in a fixed position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Chest', 'Walkover Pushup', 'Intermediate', 
'Starting in a press up position with feet wide and one hand resting on the kettlebell, complete a full press up, lowering your chest towards the ground while keeping your body straight and returning to the starting position.
Swap hands on the kettlebell, placing the hand originally on the kettlebell underneath your shoulder, complete another press up.
Repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Chest', 'Push Up', 'Beginner', 
'Place your hands firmly on the ground, directly under shoulders.
Flatten your back so your entire body is straight and slowly lower your body
Draw shoulder blades back and down, keeping elbows tucked close to your body
Exhale as you push back to the starting position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Chest', 'Decline Push-Up', 'Beginner', 
'Use a bench to elevate your feet.
Put your hands slightly wider than shoulder-width.
Slowly lower your body until your chest almost touches the ground
Raise your body until you almost lock your elbows.');


---Quads---

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Quads', 'Goblet Squat', 'Intermediate', 
'Start with a straight bar or easy bar attachment .
Get your elbows directly underneath the bar, squat straight up and then walk back a few steps.
Break at your knees and hips to initiate the squat. Make sure you maintain a flat back.
Squat all the way back to a standing position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Quads', 'Leg Extension', 'Beginner', 
'Sit on the machine with your back against the cushion and adjust the machine you are using so that your knees are at a 90° angle at the starting position.
Raise the weight by extending your knees outward, then lower your leg to the starting position. Both movements should be done in a slow, controlled motion.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Quads', 'Step Up', 'Intermediate', 
'Standing up straight, using a bench as a step, raise one foot onto the bench and hold the kettlebell in the same arm as the straight leg.
Stand and bring both feet onto the bench. Slowly lower your leg back down to the starting position.
Repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Quads', 'Lateral Lunge', 'Beginner', 
'Stand straight with your feet shoulder width apart. Keep your back straight and hold the kettlebell in front of your pelvis.
Take a large step to one side, holding the kettlebell low and lunge into the bent leg.
Return to the starting position and repeat');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Quads', 'Reverse Lunge', 'Beginner', 
'Stand straight with your feet slightly apart and hold a kettlebell in one hand.
Bring the same leg as the arm holding the kettlebell behind you, squat down until your back knee touches the ground, keeping your back straight.
Return to the starting position and repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Quads', 'Heels Up Goblet Squat', 'Intermediate', 
'Hold the weight tucked into your upper chest area, keeping your elbows in. Your feet should be slightly wider than your shoulders and the heels slightly raised on a surface.
Sink down into the squat, keeping your elbows inside the track of your knees.
Push through your heels while keeping your chest up and return to the starting position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Quads', 'Split Squat', 'Intermediate', 
'You can use any attachment on this exercise. Cable should be set all to the bottom.
Grab the attachment and walk back a few steps. Take a split stance. One leg in front and one behind.
Break at the knees and hips to initiate the split squat. Make sure your back knee touches the floor.
Squat back up into a standing position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Quads', 'Standing Leg Extension', 'Beginner', 
'Stand upright facing away from the cable crossover with the cable set to the height of your hips. Use an ankle/wrist attachment.
Extend at the knee against the cable.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Quads', 'Bulgarian Split Squat', 'Intermediate', 
'Stand with your back to a bench (or raised surface) and place one of your feet on the bench.
Squat down until your front leg is about parallel to the floor.
Go back to the starting position. After completing the desired amount of reps, switch legs and repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Quads', 'Jump Squats', 'Intermediate', 
'Stand with your feet shoulder-width apart.
Start by doing a regular squat, then engage your core and jump up explosively.
When you land, lower your body back into the squat position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Quads', 'Quads Stretch', 'Warm-up', 
'Stand perpendicular to a wall, using one arm against the wall for balance. With your other arm, grab the top of your foot.
Pull your leg upwards and back to engage your quads, pausing at the apex of the stretch for a few seconds.
Return to starting position and repeat with your other leg.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Quads', 'Sissy Squat', 'Intermediate', 
'Stand with your feet shoulder-width apart, heels raised on a plate (or simply lift them from the floor) putting your weight through the balls of your feet. Place your hands on your hips or use a rack or wall to support you. 
Bend at the knees and lean backwards, creating a strong, rigid line from your knees to your head. 
Continue bending at the knees, maintaining your backwards lean, lowering your knees as close to the ground as possible before standing back up explosively. Repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Quads', 'Lying Leg Extensions', 'Intermediate', 
'Kneel on the ground, with your bum on your heels. Lean backwards and slowly lower your head towards the ground, use a rack to support your descent if necessary. 
When you feel a stretch through your quads, or begin to lose balance, explosively raise yourself back upright, ensuring you maintain a straight line from your knees to your head throughout. 
Repeat.');


---LOWER_BACK---

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Lower-back', 'Romanian Deadlift', 'Intermediate', 
'Start with a straight bar or ez bar attachment set to the bottom of the machine. Squat the weight up into a standing position and walk a few steps back
Push your butt back to initiate the movement and then push your butt forward until youre back in a standing position.
To protect yourself from injury, always maintain a flat back on any exercise.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Lower-back', '45° Back Extension', 'Intermediate', 
'Position your thighs on the padding and hook your feet on the platform supports.
Keeping your back straight, slowly bend at your waist until your legs and back are at a 45° angle.
Slowly raise your body to the starting position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Lower-back', 'Staggered Deadlift', 'Beginner', 
'Stand with your feet shoulder width apart, shifting one foot behind you. Hold the kettlebell in both hands in front of your thighs.
Bend forward at the hips bringing the kettlebell to the floor while you slightly bend your knees and keep your back straight.
Return to the upright position and repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Lower-back', 'Kettlebell Swing', 'Intermediate', 
'Stand with your feet slightly wider than shoulder width apart holding the kettlebell between your legs, with your knees slightly bent.
Keeping your back straight, swing the kettlebell upwards until the kettlebell is level with your chest and carefully lower.
Repeat');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Lower-back', 'Goblet Good Morning', 'Beginner', 
'Stand with your feet shoulder width apart holding the kettlebell with both hands in front of your chest.
Bend forward at the hips keeping your back and knees straight and the kettlebell close to your chest.
Return to standing position and thrust your pelvis forward.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Lower-back', 'Kickback', 'Intermediate', 
'Use an ankle attachment. The cable should be set to the bottom of the crossover machine.
Push your ankle straight back, extending at the hip. Hold for a one count when you feel a contraction in your glutes.
Then flex at the hips until you are back into your original position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Lower-back', 'Pull Through', 'Intermediate', 
'This exercise works best with a rope attachment but can be done with anything. The attachment should be set to the bottom of the machine.
Face away from the cable machine, straddle the cable itself, and grab the attachment. Walk a few steps away.
Break at the hips while maintaining a flat back and mostly extended knees.
Push hips forward until you are back in a standing position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Lower-back', 'Lower back Stretch', 'Warm-up', 
'Sit on the floor with the tops of your feet pointed and flat on the ground. Move your arms out in front of you in the diving position, placing your palms flat against the ground.
With your arms fully extended, rest your buttocks on the heels of your feet, you can crawl your hands forward to extend the stretch if need be.
Hold the extended position for a few seconds, and return to starting position.');


---Biceps---


INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Biceps', 'Hammer Curl', 'Beginner', 
'Hold the dumbbells with a neutral grip (thumbs facing the ceiling).
Slowly lift the dumbbell up to chest height.
Return to starting position and repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Biceps', 'Bayesian Curl', 'Beginner', 
'Use a handle attachment. The cable should be set all the way to the bottom of the machine.
Face away from the cable machine.
Stagger your stance so you have a better base of support. Face your palm forward. Flex at the elbow and extend.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Biceps', 'Goblet Curl', 'Beginner', 
'Stand up straight with a kettlebell in both hands in front of your pelvis.
Raise the kettlebell bending your arms at the elbow until the kettlebell is level with your chest.
Lower to the starting position and repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Biceps', 'Single Arm Curl', 'Beginner', 
'Stand up straight with a kettlebell in one hand with your forearm facing out.
Raise the kettlebell, bending your arm at the elbow and keeping your forearm vertical until your palm faces the shoulder.
Lower to the starting position and repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Biceps', 'Chin-Ups', 'Intermediate', 
'Grab the bar shoulder width apart with a supinated grip (palms facing you)
With your body hanging and arms fully extended, pull yourself up until your chin is past the bar.
Slowly return to starting position. Repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Biceps', 'Preacher Curl', 'Intermediate', 
'Stand behind a bench, with your chest leaning over the edge of the bench.
With one arm resting on the bench, hold the kettlebell, bending the arm at the elbow.
Lower your arm using the bench as a guide, keeping your forearm straight.
Return to the starting position and repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Biceps', 'Concentration Curl', 'Intermediate', 
'Sitting on a chair with your legs apart, rest your arm against your thigh and hold the kettlebell with your arm extended towards the floor.
Bending your arm at the elbow, lift the kettlebell until your palm faces your shoulder.
Lower to the starting position and repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Biceps', 'Twisting Curl', 'Hard', 
'Use a handle attachment. The cable should be set all the way to the bottom of the machine.
Face away from the cable machine. Stagger your stance so you have a better base of support.
Start with a neutral grip. Flex at the elbow. While flexing twist your palm. When you hit the top of the movement your palm should be facing upward.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Biceps', 'Reverse Curl', 'Intermediate', 
'Use a handle attachment. The cable should be set all the way to the bottom of the machine.
Face away from the cable machine. Stagger your stance so you have a better base of support.
Face your palm downwards. Flex at the elbow and extend.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Biceps', 'Inverted Row', 'Beginner', 
'Lay underneath a fixed horizontal bar and grab the bar with a wide overhand grip.
Pull your body straight up to the bar.
Return to the starting position, your arms fully extended. Repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Biceps', 'Biceps Stretch', 'Warm-up', 
'Stand one foot in front of the other with the wall to your right, an arms width away.
Place your hand on the wall, fingers pointing away from you.
Gently lean forward, keeping your hand stationary.
Repeat with the other arm.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Biceps', 'Barbell Curl', 'Intermediate', 
'Grab a barbell with an underhand grip, slightly wider than the shoulders. 
Curl the barbell up using the biceps, making sure not to let the torso lean forward, shoulder collapse forward, or the elbows slide backward to the side of the body.
Repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Biceps', 'Reverse-Grip Bent-Over Row', 'Hard', 
'Grab a barbell with an underhand grip that is about shoulder-width apart. Assume the proper bent-over row position, with the back flat and chest up. 
Row the barbell to the stomach. 
Pull with both the back and the arms, lowering the weight under control and repeating for reps.');


---Triceps---


INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Triceps', 'Cable Push Downs', 'Beginner', 
'Grip the pulley bar with palms facing down at shoulder width.
Stand straight with a small forward incline. Keep your upper arms close to your body, and slowly bring the pulley bar down until your arms are fully extended.
Pause when you are at the contracted position of the motion, then slowly raise the pulley bar back to the starting point.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Triceps', 'Laying Triceps Extensions', 'Intermediate', 
'Lay on a flat bench while holding a barbell with a shoulder-width grip.
Fully extend your elbows until the barbell is directly over your chest.
Begin to flex your elbows and allow the barbell to nearly touch your forehead.
Extend your elbows back to the starting position and repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Triceps', 'Pushdown', 'Intermediate', 
'Grip the attachment and press down until arm extension. You can use any attachment for this. The cable should be set all the way at the top of the machine.
Make sure to keep your upper arm glued at your side. Extend your elbows until you feel your triceps contract.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Triceps', 'Close Grip Bench Press', 'Intermediate', 
'Lay flat on the bench with your feet on the ground. With a narrow grip on the bar, straighten your arms
Lower the bar to your lower-mid chest
Slowly raise the bar until youve locked your elbows.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Triceps', 'Skullcrusher', 'Intermediate', 
'You can use a straight bar, rope, easy bar, or two handles. The cable should be set all the way to the top of the machine.
Face away from the machine with your elbows up and the attachment just behind your head.
Extend at the elbows until you feel a contraction in your triceps and then flex at the elbow back to the starting position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Triceps', 'Cross Pushdown', 'Intermediate', 
'Either use two handles or no attachment at all. Both sides of the cable crossover should be set to the top.
Stand in the center of the machine holding each Cable in the opposing hand. Your upper arm should be at a 45 degree angle with your torso.
Extend your elbows until you feel a contraction and then return to the starting position');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Triceps', 'Elevated Pike Press', 'Intermediate', 
'Use a bench or an object to elevate your feet.
Lower your head towards the floor by bending your elbows.
Push through your hands and return to the starting pike position.
Repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Triceps', 'Overhead Tricep Extension', 'Intermediate', 
'You can use any attachment. The cable should be all the way to the bottom of the machine. Face away from the machine.
Point your elbows straight up toward the ceiling.
From there, extend your elbows until your fists are pointed straight toward the ceiling.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Triceps', 'Bench Dips', 'Beginner', 
'Grip the edge of the bench with your hands, Keep your feet together and legs straight.
Lower your body straight down.
Slowly press back up to the starting point.
TIP: Make this harder by raising your feet off the floor and adding weight.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Triceps', 'Seated Triceps Extensions', 'Intermediate', 
'Sit on the bench and hold a dumbbell with both hands. Raise the dumbbell overhead at arms length, holding the weight up with the palms of your hands.
Keep your elbows in while you lower the weight behind your head, your upper arms stationary.
Raise the weight back to starting position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Triceps', 'Triceps Stretch', 'Intermediate', 
'Use the opposite hand to gently apply pressure to the elbow.
Hold the stretch for a few seconds then repeat with the other arm.
Raise your left arm above your head, and bend at the elbow so your hand is resting at the top of your back.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Triceps', 'Lying Triceps Extension', 'Hard', 
'Grabbing the inner grip, press an EZ bar over your chest in the overhand grip position.
Extend your arms straight up.
Keeping your elbows tucked in and your arms perpendicular to the floor, gradually lower the bar until it’s just above your forehead by about an inch.
Slowly bring your arms back to the starting position without locking your elbows.
Repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Triceps', 'Rolling EZ-Bar Triceps Extensions', 'Intermediate', 
'Lie with your back flat on the ground, a loaded EZ-bar laying on the floor above your head. Grasp the bar, roll it towards your head until your upper arms are vertical. Now press the weight so that your arms are straight and vertical.
Reverse the move, placing the weight back on the floor and “rolling” the bar back. Repeat.');


---Lats---


INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Lats', 'Bent Over Barbell Row', 'Intermediate', 
'Grab a barbell with a shoulder width pronated or supinated grip.
Bend forward at your hips while maintaining a flat back.
Pull the weight toward your upper abdomen.
Lower the weight in a controlled manner and repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Lats', 'Dumbbell Row', 'Intermediate', 
'Place your right leg on the top end of the bench so that your knee and shin rest flat on the bench, your foot hanging off the end.
Bend your torso towards the floor and support yourself with your right arm by placing your palm flat against the bench.
Grip the weight with your left and, and pull it straight up to the side of your chest. Repeat the motion.
Switch the supporting leg and arm to work the other side.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Lats', 'Seated Cable Row', 'Beginner', 
'Sit with your back straight on the machine and grip the handles.
Pull the handles back using your arms. Your legs and torso should be at a 90° angle. Push out your chest.
Pull the handles towards your body until your hands are beside your abdomen.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Lats', 'Pullover', 'Intermediate', 
'You can use any attachment. Cable should be set all the way to the top of the machine.
Grab your attachment and walk a few steps back. Push your butt back to where you are leaning forward somewhat.
Initiate the movement with your shoulders and not your elbows. Imagine trying to pull the attachment through your thighs at the bottom.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Lats', 'Pull In', 'Intermediate', 
'Use a handle attachment set all the way to the top of the cable crossover machine.
Walk a few steps away from the cable machine. Face your body sideways.
Face your palm up toward the ceiling. Then pull your elbow in toward your rib cage.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Lats', 'Lat Prayer', 'Hard', 
'You can use any attachment. Cable should be set all the way to the top of the machine.
Grab your attachment and walk a few steps back. Push your butt back to where you are leaning forward. Your ears should be between your arms.
Initiate the movement with your shoulders and not your elbows. As you flex at the shoulder joint push your hips forward until your hips meet the attachment.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Lats', 'Row', 'Beginner', 
'Stand with your feet shoulder width apart holding the kettlebell with both hands in front of your thighs.
Bend forward at the hips bringing the kettlebell to the floor while you slightly bend your knees, keeping your back straight.
Lift the kettlebell upwards towards your chest and lower - repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Lats', 'Single Arm Row', 'Beginner', 
'Stand with your feet shoulder width apart, shifting one foot behind you. Hold the kettlebell in the same hand as the leg shifted backwards.
Bend forwards at the hips bringing the kettlebell to the floor while you slightly bend your knee, keeping your back straight.
Lift the kettlebell upwards towards your chest and lower - repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Lats', 'Lats Stretch', 'Warm-up', 
'Place both hands on the wall in front of you.
Slowly lower your body until you feel the stretch.
Hold at the bottom of the stretch, return to starting position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Lats', 'Pull Up Hangs', 'Intermediate', 
'Grip the overhead bar with an overhand grip (palms facing away from you). Aim to keep your arms shoulder-width apart.
Pull yourself up with arms slightly bent, remain in that position as long as possible.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Lats', 'Gorilla Row', 'Intermediate', 
'Get your feet shoulder-width apart with two kettlebells between them. Hinge at the hip until youre able to grab the handles of the kettlebells. This should put you in a deadlift position..
Row one of the kettlebells up towards your hips with a slight rotation in order to allow your elbows to come back farther. Keep a tight grip on the other kettlebell thats still stationary on the ground..
Return the kettlebell back to the ground and repeat on the other side. Keep your back flat and head neutral.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Lats', 'Landmine Row', 'Intermediate', 
'Stand over the barbell with one foot on either side. Face towards the end which is loaded with weight. Bend down and grip the barbell with both hands.
Bend your knees slightly and keep your back straight. Pull the barbell up towards your chest. Try to squeeze your shoulder blades together at the top.
Pause for a second and tense your back and shoulder blades as tightly as you can.
Slowly lower the weight back to the starting position. Repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Lats', 'Deadstop Row', 'Intermediate', 
'Lean on a bench in such a way that the body should make a straight line from the head through the lumbar spine – start with the dumbbell resting on the floor. 
Grab the handle and crush it, gripping it as hard as you can. From there, row the dumbbell by bringing your elbow towards the hip, not just going straight up and down.
Repeat.');


---TRAPS MID-BACK---


INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Traps mid-back', 'Half-Kneeling Archer Row', 'Beginner',  
'Start in a half-kneeling position your left knee on the ground, holding the ends of the resistance band in each hand. 
Raise your right arm up slightly above shoulder level in the same plane as your torso. 
Keep your thumb pointing toward the ceiling. Maintain your grip on the band with your left hand, too, holding at roughly even with your right elbow.
pull the resistance band straight back across your chest, like shooting a bow and arrow. Repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Traps mid-back', 'Band Bent-Over Row', 'Beginner', 
'Grab a low-resistance band and set it out on the ground. Stand on the middle of the band, grabbing the two ends in either hand.
Make sure that your back isnt rounded.
Squeeze your back to pull the band ends simultaneously to your chest, or as close as the band allows. 
Pause for a moment at the top of the motion, then slowly return to the original position. Repeat.');


---FOREARMS---


INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Forearms', 'Behind The Back Barbell Wrist Curl', 'Intermediate', 
'Stand straight and hold the barbell behind you using a pronated grip with your hands and feet shoulder-width apart.
Slowly curl your wrists in a semi-circular motion upwards.
Hold the barbell at the apex of the motion and then slowly lower the barbell back down to starting position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Forearms', 'Wrist Extension', 'Hard', 
'Use a handle attachment. The cable should be set all the way to the bottom of the machine.
Face away from the cable machine. Stagger your stance so you have a better base of support.
Start with your elbow at a 90° angle with your palm facing down. Flex and extend at the wrist.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Forearms', 'Farmer’s Carry', 'Beginner', 
'Standing straight with a kettlebell in one hand, lift the knee of one leg off the floor to knee height.
Bring the leg back to standing and repeat with the other leg, keeping the kettlebell on the same side.
Repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Forearms', 'Forearms Stretch', 'Beginner', 
'Place your hands together.
Rotate your arms and hands 180°.
Hold at the peak of the stretch.
Return to starting position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Forearms', 'Grip crush', 'Intermediate', 
'While seated, rest your left wrist on your knee or a flat surface, holding a dumbbell.
Relax and open your hand so the dumbbell rolls toward your fingertips.
Tighten your hand and curl your wrist up as you squeeze the weight as tightly as possible.
After performing the intended number of reps, repeat on the opposite side.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Forearms', 'Dead hangs', 'Beginner', 
'Grip the bar and hold yourself there for as long as possible, with your elbows slightly bent.
Squeeze your shoulders blade together and down to engage your lats. Keep your core tight throughout the exercise.
This helps develop grip strength and is easier than doing pullups.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Forearms', 'Forearm pull', 'Beginner', 
'Hold the weight bar of a pulley machine at shoulder level, with your palms facing down.
Draw your upper arms in toward the side of your torso.
Push the weight all the way down.
Pause, then return to the starting position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Forearms', 'Forearm squeeze', 'Beginner', 
'Use a pair of forearm grips or another object that you can squeeze, such as a tennis ball. Extend and then flex your fingers to squeeze the item.
Hold for 3–5 seconds, then relax your grip for a few seconds.
Continue for 10–15 minutes.');


---TRAPS---


INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Traps', '30 Degree Shrug', 'Beginner', 
'Use a handle attachment on both sides of crossover. With cable attachment set all the way to the bottom.
Grab both handles and make sure you are centered in the machine. Let your arms hang freely.
Pull your shoulder blades up and in towards your ears. Let your shoulder blades depress back to the starting position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Traps', 'Silverback Shrug', 'Beginner', 
'Use a bar attachment. Cable should be set all the way to the bottom.
Stand up with the attachment in hand, walk a couple of steps back make sure you are standing upright and not leaning backwards.
Retract your shoulder blades and then protract to return to the starting position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Traps', 'Overhead Press', 'Beginner', 
'Use a handle attachment with the cable set to the bottom of the machine. Stand upright making sure to maintain a flat back. Your starting position will have your palms facing forward.
Use both your elbows and shoulders to press the weight directly overhead.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Traps', 'Seated DB Shrugs', 'Beginner', 
'Sit on a bench with dumbbells in both hands, palms facing your body, back straight.
Elevate your shoulders and hold the contracted position at the apex of the motion.
Slowly lower your shoulders back to starting position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Traps', 'Barbell Silverback Shrug', 'Intermediate', 
'Stand with your feet shoulder width apart holding the Barbell with both hands in front just past shoulder width.
Bend forward at the hips with a slight bend in your knees, keeping your back straight.
Engage your shoulder blades, as if you are trying to touch them together.
Release the shrug.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Traps', 'Standing Smith Machine Shrugs', 'Beginner', 
'Place the bar on a lower rung so that when gripped your arms are fully extended and your back is straight.
Grip at shoulder width, raise the bar with your shoulders and pause at the contracted position.
Slowly lower the bar back to starting position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Traps', 'Incline Shrug', 'Beginner', 
'Leaning across the back section of the bench, with feet firmly on the floor and with arms hanging to the sides.
Holding the kettlebell in both hands engage your shoulder blades, as if you are trying to touch them together. Release the shrug.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Traps', 'Kettlebell Silverback Shrug', 'Intermediate', 
'Stand with your feet shoulder width apart holding the kettlebell with both hands in front of your thighs.
Bend forward at the hips bringing the kettlebell to the floor while you slightly bend your knees, keeping your back straight.
Holding the kettlebell in both hands engage your shoulder blades, as if you are trying to touch them together. Release the shrug.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Traps', 'Upright Row', 'Beginner', 
'Stand with your feet shoulder width apart holding the kettlebell with both hands in front of your thighs.
Bend forward at the hips bringing the kettlebell to the floor while you slightly bend your knees, keeping your back straight.
Lift the kettlebell upwards towards your chest and lower - repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Traps', 'Traps Stretch', 'Warm-up', 
'Stand upright with your feet shoulder width apart.
Place your left hand on your head and gently pull your head down towards your left shoulder. Then return to centre point.
Repeat, using your right hand pulling towards your right shoulder.');


---HAMSTRINGS---


INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Hamstrings', 'Hamstring cable Curl', 'Intermediate', 
'Use an ankle attachment with the cable set all the way to the bottom of the machine.
Stand upright or try bending slightly forward.
Flex at the knee and pull your ankle straight back.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Hamstrings', 'Hamstring Kickbacks', 'Beginner', 
'Get down on all fours and position your hands under your shoulders and your knees under your hips.
Kick back with one leg and squeeze your glutes.
Slowly return to starting position by bending your knee and lowering your leg.
Switch Legs. Repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Hamstrings', 'Nordic Hamstring Curl', 'Hard', 
'Go to your knees and ask someone to hold your ankles.
Put your hands in front of you
With a slight bend in your knees slowly bring your body to the ground (slower is better)
Push up and reset to the starting position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Hamstrings', 'Hamstrings Stretch', 'Warm-up', 
'Lie down with your legs reaching up the wall. your bum should be slightly off the floor.
Bend one leg and leave the other outstretched.
Push your thigh towards the wall.
Hold the stretch for a few seconds then return to starting position.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Hamstrings', 'Glute Bridge March', 'Intermediate', 
'Lie on your back with your arms out to your sides, palms facing down. Bend your knees until your feet are flat on the floor, about hip-width apart.
Squeeze your glutes and hamstrings to lift your hips off the ground until your body forms a straight line from your shoulders to your knees. 
Engaging your core, lift your right leg up off the ground and straighten, keeping your thighs aligned.
Lower your right leg and repeat on the other side while keeping your hips lifted as high as you can. 
Repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Hamstrings', 'Dumbbell Donkey Kicks', 'Beginner', 
'Begin on all fours with your hands and knees shoulder-width apart. Place one lightweight dumbbell in the crease of the back of your right knee until it’s securely positioned.
Keeping your knee bent at a 90-degree angle, lift your right leg up and back as high as you can with your right foot kicking up toward the ceiling. Engage your core to keep your back from arching.
Lower the leg by reversing the movement to return to the starting position. 
Repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Hamstrings', 'Stability Ball Hamstring Curls', 'Beginner', 
'Lie on your back with your arms out to your sides, palms facing down. Bend your knees and place your feet up on the stability ball about hip-width apart.
Squeeze your glutes and hamstrings to lift your hips off the ground until your body forms a straight line from your shoulders to your knees. 
Engaging your core, extend your legs straight out, rolling the ball away from you.
Bend your knees to roll the ball back in, all while keeping your hips lifted as high as you can. Lower your hips back down to the ground.
Repeat.');

INSERT INTO `user_workouts` (`user_workoutid`, `user_id`, `user_image`, `user_category`, `user_name`, `user_difficulty`, `user_descr`) VALUES (NULL, '1', 
'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
'Hamstrings', 'Kettlebell Swing', 'Intermediate', 
'Make a triangle with your arms holding a kettlebell with your hands.
With a soft bend in your knees, hinge forward at your hips and hike the bell high up in your groin area while thrusting hips forward.
Once the bell reaches about chest height, let the bell drop on its own.
Repeat.');
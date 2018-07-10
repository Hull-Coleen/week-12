CREATE TABLE person
( id            SERIAL       CONSTRAINT pk_user_1 PRIMARY KEY    
, name          VARCHAR(30) CONSTRAINT nn_user_1 NOT NULL 
, password      VARCHAR(30) CONSTRAINT nn_user_2 NOT NULL 
, user_name     VARCHAR(30) CONSTRAINT nn_user_3 NOT NULL UNIQUE);

CREATE TABLE health
, person_id        INT 
, blood_pressure   FLOAT
, exercise         VARCHAR(30)
, exercise_time INT 
, weight      FLOAT
, pulse       INT
, day_of_input           DATE
, CONSTRAINT kf _health_1 FOREIGN KEY(person_id) REFERENCES person(id);

CREATE TABLE exercise
( id SERIAL       CONSTRAINT pk_health_1 PRIMARY KEY
, 

CREATE TABLE cart
( user_id    INT    
, flower_id  INT    CONSTRAINT nn_cart_1 NOT NULL
, CONSTRAINT fk_cart_1  FOREIGN KEY(user_id) REFERENCES public.user(user_id)
, CONSTRAINT fk_cart_2  FOREIGN KEY(flower_id) REFERENCES flower(flower_id)
, CONSTRAINT uq_cart    UNIQUE (user_id, flower_id));


INSERT INTO flower (flower_type, flower_size, flower_price, base_type, description, image)
VALUES
(1, 1, 2.00, 1, 'Small Blue', 'BlueF.jpg'),
(2, 2, 3.00, 2, 'Medium Red', 'RedF.jpg'),
(3, 3, 4.00 , 3, 'Large Yellow', 'YellowF.jpg'),
(1, 2, 5.00 , 2, 'Large Purple', 'PurpleF.jpg');

INSERT INTO vase (vase_size, vase_price, vase_type)
VALUES
(1, 2.00, 1),
(2, 3.00, 2),
(3, 4.00, 3),


INSERT INTO item_size (size_type)
VALUES
('SM'),
('MED'),
('LG');

INSERT INTO public.user (user_name, user_password, user_user_name) 
VALUES
	('Me', 'pass', 'Metoo'),
	('You', 'password', 'Youtoo');
	

INSERT INTO occasion (occasion_type)
VALUES
	('Mother Day'),
	('Anniversary'),
	('Birthday');




INSERT INTO flower (flower_type, flower_size, flower_price, base_type, description, image)
VALUES
(2, 2, 2.00, 2, 'Medium Blue', 'BlueF.jpg'),
(3, 3, 2.00, 3, 'Large Blue', 'BlueF.jpg'),
(1, 3, 3.00, 3, 'Large Red', 'RedF.jpg'),
(2, 1, 3.00, 1, 'Small Red', 'RedF.jpg'),
(3, 1, 4.00 , 1, 'Small Yellow', 'YellowF.jpg'),
(1, 1, 5.00 , 1, 'SmallPurple', 'PurpleF.jpg'),
(2, 2, 5.00 , 2, 'Medium Purple', 'PurpleF.jpg'),
(3, 2, 4.00 , 2, 'Medium Yellow', 'YellowF.jpg');

	
INSERT INTO `question` (`question`, `xp`, `category`) VALUES
('World War I began in which year?', '25', 'History'),
('Adolf Hitler was born in which country?', '25', 'History'),
('John F. Kennedy was assassinated in:', '25', 'History'),
('Who fought in the war of 1812?', '75', 'History'),
('Which general famously stated "I shall return?"', '25', 'History'),
('The Magna Carta was published by the King of which country?', '25', 'History'),
('The first successful printing press was developed by this man.', '25', 'History'),
('The disease that ravaged and killed a third of Europe\'s population in the 14th century is known as:', '75', 'History'),
('The Hundred Years War was fought between what two countries?', '25', 'History'),
('Which man wrote a document known as the 95 Theses?', '25', 'History'),
('What famous 5th century A.D conqueror was known as "The Scourge of God?"', '25', 'History'),
('What famous rifle is known in America as "The Gun that Won the West?"', '75', 'History'),
('Who wrote "To be, or not to be, that is the question"?', '25', 'Art'),
('According to Guinness world records, what is the best selling book of all time?', '25', 'Art'),
('What type of glass is used in movies and TV special effects to break, without harming the actors?', '25', 'Art'),
('Van Gogh\'s "The Starry Night" illustrates the view from the window of which building', '75', 'Art'),
('Which composer had his heart buried in Poland and his body buried in France?', '75', 'Art'),
('Who is Stefani Joanne Angelina Germanotta?', '75', 'Art'),
('Which painter continued his work despite having crippling arthritis?', '75', 'Art'),
('La Giaconda is better known as what?', '25', 'Art'),
('Tom Hanks won two consecutive Oscars in 1994 and 1995. Which films were they for?', '75', 'Art'),
('Who played the lead role in the 2001 movie Lara Croft: Tomb Raider?', '25', 'Art'),
('Which singer has the most UK Number One singles ever?', '75', 'Art'),
('What was Britney Spears\' first single called?', '75', 'Art'),
('What is the highest mountain in the world?', '25', 'Geography'),
('How many islands belong to the Philippines?', '75', 'Geography'),
('Which one of these countries has more than one capital?', '25', 'Geography'),
('Where is the largest pyramid in the world?', '25', 'Geography'),
('How did the Marshall Islands get its name?', '75', 'Geography'),
('What\'s the name of the second biggest waterfall in the world, located in South Africa?', '75', 'Geography'),
('In which city is located the statue "Christ the Redeemer"?', '25', 'Geography'),
('Which city is the capital of Australia?', '25', 'Geography'),
('What is the smallest state in the world?', '25', 'Geography'),
('Which Turkish city has the name of a cartoon character?', '75', 'Geography'),
('Which country did once have the name Rhodesia?', '75', 'Geography'),
('What is the largest state of the United States?', '75', 'Geography'),
('Which part of the body has the thinnest skin?', '25', 'Science'),
('which of these chemicals is often found in nail polish remover?', '25', 'Science'),
('Where in the human body is the pharynx?', '25', 'Science'),
('How many teeth does an adult human have?', '25', 'Science'),
('Which creature has the longest pregnancy?', '75', 'Science'),
('Which animal has more than one heart?', '25', 'Science'),
('Who was the first woman to win the Nobel Prize?', '75', 'Science'),
('Where is the smallest bone of the human body?', '25', 'Science'),
('What are phosphenes?', '75', 'Science'),
('Which plant, known as "the bearer of hope", survived the atomic bomb of Hiroshima in 1945?', '75', 'Science'),
('Which hormone causes cells to absorb glucose from the blood?', '25', 'Science'),
('Which marine animal is the only male creature that reproduces through the female\'s ovulation?', '75', 'Science'),
('In which year did Maradona score a goal with his hand?', '75', 'Sports'),
('How many minutes is a rugby match?', '75', 'Sports'),
('In which country were the first Olympic Games held?', '25', 'Sports'),
('How many matches did Mohammed Ali lose in his career?', '75', 'Sports'),
('Which cyclist was also called "The Cannibal"?', '75', 'Sports'),
('In which country is the Interlagos F1-circuit?', '75', 'Sports'),
('What is the name of the Barcelona FC football stadium?', '25', 'Sports'),
('Which popular fitness method was invented by a German?', '75', 'Sports'),
('How many times has Michael Schumacher been a Formula 1 champion?', '75', 'Sports'),
('What is the national sport in Japan?', '25', 'Sports'),
('With which car did Fernando Alonso won his first tittle in Formula 1?', '75', 'Sports'),
('Which snooker player is nicknamed as "The Rocket"?', '25', 'Sports');

INSERT INTO `answer` (`answer`, `correct`, `question_id`) VALUES
('1923', 0, 1),
('1938', 0, 1),
('1917', 0, 1),
('1914', 1, 1),
('France',0,2),
('Germany',0,2),
('Austria',1,2),
('Hungary',0,2),
('New York',0,3),
('Austin',0,3),
('Dallas',1,3),
('Miami',0,3),
('Andrew Jackson',1,4),
('Arthur Wellsley',0,4),
('Otto von Bismarck',0,4),
('Napoleon',0,4),
('Bull Halsey',0,5),
('George Patton',0,5),
('Douglas MacArthur',1,5),
('Omar Bradley',0,5),
('France',0,6),
('Austria',0,6),
('Italy',0,6),
('England',1,6),
('Johannes Gutenberg',1,7),
('Benjamin Franklin',0,7),
('Sir Isaac Newton',0,7),
('Martin Luther',0,7),
('The White Death',0,8),
('The Black Plague',0,8),
('Smallpox',0,8),
('The Bubonic Plague',1,8),
('Italy and Carthage',0,9),
('England and Germany',0,9),
('France and England',1,9),
('Spain and France',0,9),
('Martin Luther',1,10),
('Saint Augustus',0,10),
('Henry David Thoreau',0,10),
('Voltaire',0,10),
('Hannibal',0,11),
('Julius Caesar',0,11),
('William the Conqueror',0,11),
('Attila the Hun',1,11),
('Henry Repeating Rifle',0,12),
('Colt Peacemaker',0,12),
('Winchester Model 1873',1,12),
('Remington Army Revolver',0,12),
('Sylvia Plath', 0, 13),
('Virginia Woolf', 0, 13),
('John Steinbeck', 0, 13),
('William Shakespeare', 1, 13),
('The Three Musketeers', 0, 14),
('The Bible', 1, 14),
('Quotations from Chairman Mao Tse-tung', 0, 14),
('Quran', 0, 14),
('Barley glass', 0, 15),
('Sugar cup', 1, 15),
('Synthetic glass', 0, 15),
('Vinegar glass', 0, 15),
('Windmill', 0, 16),
('Hospital', 0, 16),
('Asylum', 1, 16),
('Hotel', 0, 16),
('Franz Liszt', 0, 17),
('Richard Wagner', 0, 17),
('Frédéric Chopin', 1, 17),
('Antonín Dvorak', 0, 17),
('Marilyn Monroe', 0, 18),
('Lady Gaga', 1, 18),
('Alicia Keys', 0, 18),
('Lana Del Rey', 0, 18),
('Pierre-Auguste Renoir', 1, 19),
('Pablo Picasso', 0, 19),
('Claude Monet', 0, 19),
('Miguel Ângelo', 0, 19),
('Meisje met de parel', 0, 20),
('Whistler\'s Mother', 0, 20),
('The Princesse de Broglie', 0, 20),
('Mona Lisa', 1, 20),
('"Philadelphia" and "Forrest Gump"', 1, 21),
('"Philadelphia" and "Salving Private Ryan"', 0, 21),
('"Salving Private Ryan" and "Cast Away"', 0, 21),
('"Cast Away" and "Forrest Gump"', 0, 21),
('Charlize Theron', 0, 22),
('Nicole Kidman', 0, 22),
('Angelina Jolie', 1, 22),
('Cameron Diaz', 0, 22),
('The Beatles', 0, 23),
('Madonna', 0, 23),
('Elvis Presley', 1, 23),
('Ed Sheeran', 0, 23),
('Baby One More Time', 1, 24),
('Toxic', 0, 24),
('Lucky', 0, 24),
('Born to Make You Happy', 0, 24),
('K2', 0, 25),
('Mount Everest', 1, 25),
('Mount Fuji', 0, 25),
('Kilimanjaro', 0, 25),
('184', 0, 26),
('10363', 0, 26),
('5290', 0, 26),
('7641', 1, 26),
('South Africa', 1, 27),
('Slovenia', 0, 27),
('Vietnam', 0, 27),
('Curaçao', 0, 27),
('Egypt', 0, 28),
('Mexico', 1, 28),
('Guatemala', 0, 28),
('Turkey', 0, 28),
('Hosted the first US Marshall Service', 0, 29),
('In honor of a famous Marshall', 0, 29),
('Due to the outline of the islands in the form of a great star', 0, 29),
('Were named after British explorer John Marshall', 1, 29),
('Tugela falls', 1, 30),
('Browne falls', 0, 30),
('Yosemite falls', 0, 30),
('James Bruce falls', 0, 30),
('Salvador', 0, 31),
('Rio de Janeiro', 1, 31),
('Brasília', 0, 31),
('São Paulo', 0, 31),
('Sydney', 0, 32),
('Melbourne', 0, 32),
('Adelaide', 0, 32),
('Camberra', 1, 32),
('Vatican', 1, 33),
('Monaco', 0, 33),
('Nauru', 0, 33),
('Tuvalu', 0, 33),
('Green Lantern', 0, 34),
('Batman', 1, 34),
('Wolverine', 0, 34),
('Spiderman', 0, 34),
('Madagascar', 0, 35),
('Zimbabwe', 1, 35),
('Kenya', 0, 35),
('Rwanda', 0, 35),
('California', 0, 36),
('Texas', 0, 36),
('Alaska', 1, 36),
('Washington', 0, 36),
('Eyelids', 1, 37),
('Feet soles', 0, 37),
('Hands', 0, 37),
('Arms', 0, 37),
('Dichloromethane', 0, 38),
('Acetone', 1, 38),
('Formalin', 0, 38),
('Butanol', 0, 38),
('Throat', 1, 39),
('Intestine', 0, 39),
('Ear', 0, 39),
('Eye', 0, 39),
('28', 0, 40),
('32', 1, 40),
('38', 0, 40),
('40', 0, 40),
('Giraffe', 0, 41),
('Elephant', 1, 41),
('Bison', 0, 41),
('Camel', 0, 41),
('Jellyfish', 0, 42),
('Blue whale', 0, 42),
('Octopus', 1, 42),
('Hippopotamus', 0, 42),
('Marie Curie', 1, 43),
('Sigrid Undset', 0, 43),
('Lorne Schindler', 0, 43),
('Irene Hemmingway', 0, 43),
('Foot', 0, 44),
('Hand', 0, 44),
('Chest', 0, 44),
('Ear', 1, 44),
('Luminous spots that we see when rubbing our eyes closed', 1, 45),
('A lung disease', 0, 45),
('An additive to increase the carbonation of a drink', 0, 45),
('Small openings in the solar ring', 0, 45),
('Trema Orientalis', 0, 46),
('Carpobrotus Chilensis', 0, 46),
('Acer Buergerianum', 0, 46),
('Gingko Biloba', 1, 46),
('Oxytocin', 0, 47),
('Insulin', 1, 47),
('Adrenaline', 0, 47),
('Epinephrine', 0, 47),
('Octopus', 0, 48),
('Seahorse', 1, 48),
('Jellyfish', 0, 48),
('Hermit Crab', 0, 48),
('1986', 1, 49),
('1967', 0, 49),
('1978', 0, 49),
('1990', 0, 49),
('90', 0, 50),
('80', 1, 50),
('70', 0, 50),
('60', 0, 50),
('Greece', 1, 51),
('Italy', 0, 51),
('France', 0, 51),
('China', 0, 51),
('3', 0, 52),
('1', 0, 52),
('5', 1, 52),
('6', 0, 52),
('Lance Armstrong', 0, 53),
('Bernard Hinault', 0, 53),
('Fausto Coppi', 0, 53),
('Eddy Merckx', 1, 53),
('Italy', 0, 54),
('Belgium', 0, 54),
('Brazil', 1, 54),
('Germany', 0, 54),
('Santiago Barnabéu', 0, 55),
('La Cartuja', 0, 55),
('RCDE Stadium', 0, 55),
('Camp Nou', 1, 55),
('Yoga', 0, 56),
('Pilates', 1, 56),
('Crossfit', 0, 56),
('Parkour', 0, 56),
('9', 0, 57),
('10', 0, 57),
('7', 1, 57),
('5', 0, 57),
('Judo', 0, 58),
('Sumo Wrestling', 1, 58),
('Karate', 0, 58),
('Akido', 0, 58),
('Ferrrari', 0, 59),
('HRT (Hispania Racing Team)', 0, 59),
('Renault', 1, 59),
('Lotus', 0, 59),
('Mark Selby', 0, 60),
('Ronnie O\'Sullivan', 1, 60),
('Judd Trump', 0, 60),
('Neil Robertson', 0, 60);

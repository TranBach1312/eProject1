CREATE Table if NOT exists brands(
    brand_id int primary key auto_increment, 
    brand_name varchar(50),
    brand_infomation TEXT
);

CREATE TABLE if not exists ranges(
    range_id int primary key auto_increment,
    range_acronym varchar(50),
    range_name varchar(20),
    range_infomation TEXT
);

CREATE Table if not EXISTS cars(
    car_id int primary key auto_increment,
    brand_id int not null references brands(brand_id),
    range_id int not null references ranges(range_id),
    car_name varchar(50),
    car_infomation TEXT,
    price float,
    fuel_type_id varchar(20),
    gearbox_type_id int 
);

CREATE table if not exists transmissions(
    transmission_id int primary key auto_increment,
    transmission_type varchar(50)
);

CREATE table if not exists fuels(
    fuel_id int primary key auto_increment,
    fuel_type varchar(30)
);
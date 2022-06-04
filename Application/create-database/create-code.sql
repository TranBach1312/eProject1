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
    price float
)
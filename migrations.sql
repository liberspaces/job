-- 20230626152632_create_services_table.php
CREATE TABLE services (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL
);

-- 20230626152633_create_price_lists_table.php
CREATE TABLE price_lists (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    service_id INT UNSIGNED,
    price DECIMAL(10, 2),
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL,
    FOREIGN KEY (service_id) REFERENCES services(id)
);

-- 20230626152634_create_points_table.php
CREATE TABLE points (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    is_active TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL
);

-- 20230626152635_create_sales_table.php
CREATE TABLE sales (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    service_id INT UNSIGNED,
    point_id INT UNSIGNED,
    quantity INT,
    total_amount DECIMAL(10, 2),
    created_at TIMESTAMP NULL DEFAULT NULL,
    FOREIGN KEY (service_id) REFERENCES services(id),
    FOREIGN KEY (point_id) REFERENCES points(id)
);

-- 20230626152636_create_customers_table.php
CREATE TABLE customers (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL
);

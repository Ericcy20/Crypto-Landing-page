CREATE DATABASE user_dashboard;

USE user_dashboard;

CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL UNIQUE,
password VARCHAR(255) NOT NULL, -- Password will be hashed
email VARCHAR(100) NOT NULL UNIQUE,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);76
CREATE TABLE ACCOUNTS (
    USER_ID INT PRIMARY KEY,
    BALANCE DECIMAL(10, 2) NOT NULL
);
CREATE TABLE TRANSACTIONS (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    USER_ID INT NOT NULL,
    DATE DATE NOT NULL,
    AMOUNT DECIMAL(10, 2) NOT NULL,
    TYPE VARCHAR(50) NOT NULL
);
CREATE TABLE POSITIONS (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    USER_ID INT NOT NULL,
    ASSET VARCHAR(50) NOT NULL,
    QUANTITY DECIMAL(10, 2) NOT NULL,
    CURRENT_VALUE DECIMAL(10, 2) NOT NULL
);
CREATE TABLE USER_EXCHANGES (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    USER_ID INT NOT NULL,
    EXCHANGE_NAME VARCHAR(50) NOT NULL,
    STATUS VARCHAR(50) NOT NULL,
    API_KEY VARCHAR(255) NOT NULL,
    FOREIGN KEY (USER_ID) REFERENCES USERS(ID) ON DELETE CASCADE
);
CREATE TABLE PLANS (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    PLAN_NAME VARCHAR(100) NOT NULL,
    DESCRIPTION TEXT NOT NULL,
    PRICE DECIMAL(10, 2) NOT NULL
);
CREATE TABLE AFFILIATES (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    USER_ID INT NOT NULL,
    AFFILIATE_CODE VARCHAR(50) NOT NULL,
    TOTAL_REFERRALS INT NOT NULL,
    TOTAL_COMMISSIONS DECIMAL(10, 2) NOT NULL)
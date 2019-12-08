# -*- coding: utf-8 -*-
import logging
import requests
import random

from time import sleep
from selenium import webdriver
from datetime import datetime
from selenium.webdriver.support.ui import Select

def test_signup(customers):
    btn_url = customer.find_element_by_class_name("signup").find_element_by_tag_name("a").get_attribute("href")
    customer.get(btn_url)
    s_username_box = customer.find_element_by_css_selector("input[name='username']")
    s_password_box = customer.find_element_by_css_selector("input[name='password']")
    s_email_box = customer.find_element_by_css_selector("input[name='email']")
    s_gender_box = customer.find_element_by_css_selector("input[name='gender']")
    s_age_box = customer.find_element_by_css_selector("input[name='age']")
    s_marr_box = customer.find_element_by_css_selector("input[name='marr']")
    s_address_box = customer.find_element_by_css_selector("input[name='address']")
    s_city_box = customer.find_element_by_css_selector("input[name='city']")
    s_country_box = customer.find_element_by_css_selector("input[name='country']")
    s_state_box = customer.find_element_by_css_selector("input[name='state']")
    s_zipcode_box = customer.find_element_by_css_selector("input[name='zip']")
    s_phone_box = customer.find_element_by_css_selector("input[name='phone']")
    

    test_username = "test1" + str(random.randint(1,1000))
    test_password = test_username
    test_email = "test1@fjsdo.com"
    test_gender = male
    test_age = 25
    test_marr = single
    test_address = 123 I ave
    test_city = Corvallis
    test_country = US
    test_state = OR
    test_zipcode = 97333
    test_phone = 1234567890

    print("Sign up with id: ", test_id)

    s_user_box.clear()
    s_user_box.send_keys(test_username)
    s_pwd_box.clear()
    s_pwd_box.send_keys(test_password)
    s_email_box.clear()
    s_email_box.send_keys(test_email)
    s_gender_box.clear()
    s_gender_box.send_keys(test_gender)
    s_age_box.clear()
    s_age_box.send_keys(test_age)
    s_marr_box.clear()
    s_marr_box.send_keys(test_marr)
    s_address_box.clear()
    s_address_box.send_keys(test_address)
    s_city_box.clear()
    s_city_box.send_keys(test_city)
    s_country_box.clear()
    s_country_box.send_keys(test_country)
    s_state_box.clear()
    s_state_box.send_keys(test_state)
    s_zipcode_box.clear()
    s_zipcode_box.send_keys(test_zipcode)
    s_phone_box.clear()
    s_phone_box.send_keys(test_phone)
    customer.find_element_by_css_selector("input[name='username']").click()
    customer.find_element_by_css_selector("input[name='password']").click()
    customer.find_element_by_css_selector("input[name='email']").click()
    customer.find_element_by_css_selector("input[name='name']").click()
    customer.find_element_by_css_selector("input[name='gender']").click()
    customer.find_element_by_css_selector("input[name='age']").click()
    customer.find_element_by_css_selector("input[name='marr']").click()
    customer.find_element_by_css_selector("input[name='address']").click()
    customer.find_element_by_css_selector("input[name='city']").click()
    customer.find_element_by_css_selector("input[name='country']").click()
    customer.find_element_by_css_selector("input[name='state']").click()
    customer.find_element_by_css_selector("input[name='zipcode']").click()
    customer.find_element_by_css_selector("input[name='phone']").click()
    sleep(1)

    sbm_btn = customer.find_element_by_css_selector("input[name='submit']")
    sbm_btn.click()

    sleep(2)
    # print(customer.cusrrent_url)

    if "indexmain" in customer.current_url:
        logging.info("Sign up successfully")
    else:
        logging.info("Sign up ERROR!!!")


def test_logout(customer):
    customer.find_element_by_class_name("logout").find_element_by_tag_name("a").click()
    if len(customer.find_elements_by_class_name("login"))> 0:
        # print(len(customer.find_elements_by_class_name("login")))
        logging.info("Logged out")
    else:
        logging.info("Log out ERROR!!!")


def test_login(customer, withoutSignup, username, password):
    if withoutSignup == True:
        btn_url = customer.find_element_by_class_name("login").find_element_by_tag_name("a").get_attribute("href")
        customer.get(btn_url)

    user_box = customer.find_element_by_id("username")
    pwd_box = customer.find_element_by_id("password")

    user_box.clear()
    user_box.send_keys(username)
    pwd_box.clear()
    pwd_box.send_keys(password)
    sleep(1)

    sbm_btn = customer.find_element_by_id("sbm_btn")
    sbm_btn.click()

    sleep(2)

    if len(customer.find_elements_by_class_name("logout")) > 0:
        logging.info("Successfully logged in ")
    else:
        print("user: ", username)
        print("pwd: ", password)
        logging.info("Login error")

def test_bookappointment(customers):
    btn_url = customers.find_element_by_class_name("bookappointment").find_element_by_tag_name("a").get_attribute("href")
    customers.get(btn_url)
    
    if "bookappointment" in customers.current_url:
        logging.info("Successfully enter find book appointment page.")
    else:
        logging.info("ERROR entering book appointment page!!!")

    value_list = ["Title", "Ingredients", "Instructions"]
    for ea_v in value_list:
        test_bookappointment_menu_option(customers, ea_v)

    btn = customers.find_element_by_class_name("userprofile").find_element_by_tag_name("a").get_attribute("href")
    customers.get(btn)

    s_firstname_box = customer.find_element_by_css_selector("input[name='fname']")
    s_lastname_box = customer.find_element_by_css_selector("input[name='lname']")
    s_email_box = customer.find_element_by_css_selector("input[name='email']")
    s_gender_box = customer.find_element_by_css_selector("input[name='gender']")
    s_age_box = customer.find_element_by_css_selector("input[name='age']")
    s_date_box = customer.find_element_by_css_selector("input[name='date']")
    s_time_box = customer.find_element_by_css_selector("input[name='time']")
    s_phone_box = customer.find_element_by_css_selector("input[name='tel']")

    test_firstname = "test1"
    test_lastname = "test2"
    test_email = "test1@fjsdo.com"
    test_gender = male
    test_age = 25
    test_date = 12/25/19
    test_time = 15:00:00
    test_phone = 1234567890

    btn = customer.find_element_by_id("sbm_btn")
    btn.click()

    sleep(2)

    if "cbook.php" in customer.current_url:
        booking.info("Book successfully")
    else:
       booking.info("Book ERROR!!!")


    # back to home page
    home_btn = customer.find_element_by_css_selector("#sidebar > a:nth-child(1)").get_attribute("href")
    customer.get(home_btn)

    logging.info("Finished all tests!!")

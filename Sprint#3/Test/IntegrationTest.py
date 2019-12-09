# -*- coding: utf-8 -*-
import logging
import requests
import random
from time import sleep
from selenium import webdriver
from datetime import datetime
from selenium.webdriver.support.ui import Select
import random
import gc
import traceback
from mongoengine.queryset.visitor import Q
from selenium.webdriver.common.keys import Keys

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

def test_signup(doctors):
    btn_url = doctors.find_element_by_class_name("signup").find_element_by_tag_name("a").get_attribute("href")
    doctors.get(btn_url)
    s_username_box = doctor.find_element_by_css_selector("input[name='username']")
    s_password_box = doctor.find_element_by_css_selector("input[name='password']")
    s_firstname_box = doctor.find_element_by_css_selector("input[name='password']")
    s_lastname_box = doctor.find_element_by_css_selector("input[name='password']")
    s_email_box = doctor.find_element_by_css_selector("input[name='email']")
    s_gender_box = doctor.find_element_by_css_selector("input[name='gender']")
    s_DoB_box = doctor.find_element_by_css_selector("input[name='DoB']")
    s_speciality_box = doctor.find_element_by_css_selector("input[name='speciality']")
    s_note_box = doctor.find_element_by_css_selector("input[name='note']")
    s_phone_box = doctor.find_element_by_css_selector("input[name='phone']")
    

    test_username = "test1" + str(random.randint(1,1000))
    test_password = test_id
    test_firstname = doc1
    test_lastname = doc2
    test_email = "doc1@123.com"
    test_gender = male
    test_DoB = 9/8/1995
    test_speciality = heart
    test_note = good
    test_phone = 1234567890

    print("Sign up with id: ", test_username)

    s_user_box.clear()
    s_user_box.send_keys(test_username)
    s_pwd_box.clear()
    s_pwd_box.send_keys(test_password)
    s_firstname_box.clear()
    s_firstname_box.send_keys(test_firstname)
    s_lastname_box.clear()
    s_lastname_box.send_keys(test_lastname)
    s_email_box.clear()
    s_email_box.send_keys(test_email)
    s_gender_box.clear()
    s_gender_box.send_keys(test_gender)
    s_DoB_box.clear()
    s_DoB_box.send_keys(test_DoB)
    s_speciality_box.clear()
    s_speciality_box.send_keys(test_speciality)
    s_note_box.clear()
    s_note_box.send_keys(test_note)
    s_phone_box.clear()
    s_phone_box.send_keys(test_phone)

    doctors.find_element_by_css_selector("input[name='username']").click()
    doctors.find_element_by_css_selector("input[name='password']").click()
    doctors.find_element_by_css_selector("input[name='firstname']").click()
    doctors.find_element_by_css_selector("input[name='lastname']").click()
    doctors.find_element_by_css_selector("input[name='email']").click()
    doctors.find_element_by_css_selector("input[name='gender']").click()
    doctors.find_element_by_css_selector("input[name='DoB']").click()
    doctors.find_element_by_css_selector("input[name='speciality']").click()
    doctors.find_element_by_css_selector("input[name='note']").click()
    doctors.find_element_by_css_selector("input[name='phone']").click()
    sleep(1)

    sbm_btn = doctor.find_element_by_css_selector("input[name='submit']")
    sbm_btn.click()

    sleep(2)
    # print(doctor.cusrrent_url)

    if "indexmain" in doctor.current_url:
        logging.info("Sign up successfully")
    else:
        logging.info("Sign up ERROR!!!")


def test_logout(customer):
    doctor.find_element_by_class_name("logout").find_element_by_tag_name("a").click()
    if len(doctor.find_elements_by_class_name("login"))> 0:
        # print(len(doctor.find_elements_by_class_name("login")))
        logging.info("Logged out")
    else:
        logging.info("Log out ERROR!!!")


def test_login(doctor, withoutSignup, username, password):
    if withoutSignup == True:
        btn_url = doctor.find_element_by_class_name("login").find_element_by_tag_name("a").get_attribute("href")
        doctor.get(btn_url)

    user_box = doctor.find_element_by_id("username")
    pwd_box = doctor.find_element_by_id("password")

    user_box.clear()
    user_box.send_keys(username)
    pwd_box.clear()
    pwd_box.send_keys(password)
    sleep(1)

    sbm_btn = doctor.find_element_by_id("sbm_btn")
    sbm_btn.click()

    sleep(2)

    if len(doctor.find_elements_by_class_name("logout")) > 0:
        logging.info("Successfully logged in ")
    else:
        print("user: ", username)
        print("pwd: ", password)
        logging.info("Login error")

def test_customers(doctor):

    for ea_v in value_list:
        test_customers_list(name, age, gender, address, phone)

def test_alldoctors(doctor):

    for ea_v in value_list:
        test_customers_list(name, DoB, gender, Speciality, phone)

def test_doctorschedual(doctor):

    for ea_v in value_list:
        test_customers_list(name, gender, service, time, email, phone)

def test_profileupdate(doctor):

    btn = doctor.find_element_by_class_name("doctorprofile").find_element_by_tag_name("a").get_attribute("href")
    doctor.get(btn)

    ofname = doctor.find_element_by_id("ofname")
    ofname.send_keys(ufame)
    nfname = doctor.find_element_by_id("nfname")
    nfname.send_keys(ufame+"100")
    olname = doctor.find_element_by_id("olname")
    olname.send_keys(ulame)
    nlname = doctor.find_element_by_id("nlname")
    nlname.send_keys(ulame+"100")
    oDoB = doctor.find_element_by_id("oDoB")
    oDoB.send_keys(uDoB)
    nDoB = doctor.find_element_by_id("nDoB")
    nDoB.send_keys(2019/8/8)
    ospeciality = doctor.find_element_by_id("ospeciality")
    ospeciality.send_keys(uspeciality)
    nspeciality = doctor.find_element_by_id("nspeciality")
    nspeciality.send_keys("no")
    ogender = doctor.find_element_by_id("ogender")
    ogender.send_keys(ugender)
    ngender = doctor.find_element_by_id("ngender")
    ngender.send_keys(ugender+"100")
    otel = doctor.find_element_by_id("otel")
    otel.send_keys(utel)
    ntel = doctor.find_element_by_id("ntel")
    ntel.send_keys("0987654321")

    btn = doctor.find_element_by_id("sbm_btn")
    btn.click()

    sleep(2)

    homeurl = doctor.find_element_by_class_name("navbar-brand").get_attribute("href")
    doctor.get(homeurl)

    sleep(1)

    test_logout(doctor)
    
    test_login(doctor, True)

    sleep(2)

    if len(doctor.find_elements_by_class_name("logout")) > 0:
        logging.info("Successfully update ")
    else:
        print("ufname: ", ufname)
        print("ulname: ", ulname)
        logging.info("update error")
   
    # back to home page
    home_btn = doctor.find_element_by_css_selector("#sidebar > a:nth-child(1)").get_attribute("href")
    doctor.get(home_btn)

    logging.info("Finished all tests!!")


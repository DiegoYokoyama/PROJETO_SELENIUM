from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC


driver = webdriver.Chrome()


driver.get("http://localhost/xampp/PROJETO_SELENIUM/index.html")



botao = WebDriverWait(driver, 10).until(
    EC.visibility_of_element_located((By.ID, "btnSoftware"))
)


botao.click()







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






# driver.find_element("http://10.28.1.194/PROJETO_108-main/")

# driver.find_elements_by_xpath("/html/body/main/div/div/div[1]/div[2]/p/a").click()
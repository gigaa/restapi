# restapi
--------------------------------------------------------------------------------------------
                                                         Customer
--------------------------------------------------------------------------------------------

Show Customer -- Get method

![image](https://user-images.githubusercontent.com/9627906/138958166-523ecaa0-5e14-4aab-8601-c67f17c5e05e.png)

http://localhost/restapi/public/api/customers?page=2

return customer list and ?page=2 parametr return paginate 5 item page 2

--------------------------------------------------------------------------------------------

Create Customer -- Post method

http://localhost/restapi/public/api/customers

Transfer Parametrs:  firstname,lastname,gender,age 

![image](https://user-images.githubusercontent.com/9627906/138960445-e4e369ff-4423-4e7e-ba20-13f610aaa5e6.png)

--------------------------------------------------------------------------------------------

Update Customer -- Put method

http://localhost/restapi/public/api/customers/{id}

Transfer Parametr:id and Update this customer parametrs: firstname,lastname,gender,age

![image](https://user-images.githubusercontent.com/9627906/138960279-0f55068d-9444-4e15-ae45-c0c789bba086.png)

--------------------------------------------------------------------------------------------

Delete Customer -- Post method

http://localhost/restapi/public/api/customers/{id}

Transfer Parametr:id and remove this customer

![image](https://user-images.githubusercontent.com/9627906/138959502-7119f8da-0f74-46b3-9f15-2306f7095128.png)


--------------------------------------------------------------------------------------------
                                                         Address
--------------------------------------------------------------------------------------------
Show Address -- Get method

http://localhost/restapi/public/api/address

return customer list

![image](https://user-images.githubusercontent.com/9627906/138963266-6cff2457-0da7-4d21-835e-64b15376329f.png)

--------------------------------------------------------------------------------------------

Create Address -- Post method

http://localhost/restapi/public/api/address

Transfer Parametrs:  country,city,address1,address2 

![image](https://user-images.githubusercontent.com/9627906/138962381-2579497f-20af-438e-b27d-0f90059851b8.png)

--------------------------------------------------------------------------------------------

get Customer address Info -- Get method

http://localhost/restapi/public/api/customers/{id}/address

Transfer Parametr:id and return responce customer address info

![image](https://user-images.githubusercontent.com/9627906/138961100-c814ab46-7d46-47f1-bf2c-b936d47335ef.png)

--------------------------------------------------------------------------------------------

Update address -- Put method

http://localhost/restapi/public/api/customers/{id}

Transfer Parametr:id and Update this address parametrs: country,city,address1,address2

![image](https://user-images.githubusercontent.com/9627906/138963785-70394a85-675d-4cf9-b27e-d2851da11755.png)


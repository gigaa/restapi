# restapi

Show Customer -- Get method

![image](https://user-images.githubusercontent.com/9627906/138958166-523ecaa0-5e14-4aab-8601-c67f17c5e05e.png)

http://localhost/restapi/public/api/customers?page=2

return customer list and ?page=2 parametr return paginate 5 item page 2

Create Customer -- Post method

http://localhost/restapi/public/api/customers

Transfer Parametrs:  firstname,lastname,gender,age 

![image](https://user-images.githubusercontent.com/9627906/138960445-e4e369ff-4423-4e7e-ba20-13f610aaa5e6.png)

Update Customer -- Put method

http://localhost/restapi/public/api/customers/{id}

Transfer Parametr:id and Update this customer parametrs: firstname,lastname,gender,age

![image](https://user-images.githubusercontent.com/9627906/138960279-0f55068d-9444-4e15-ae45-c0c789bba086.png)

Delete Customer -- Post method

http://localhost/restapi/public/api/customers/{id}

Transfer Parametr:id and remove this customer

![image](https://user-images.githubusercontent.com/9627906/138959502-7119f8da-0f74-46b3-9f15-2306f7095128.png)

get Customer address Info -- Get method

http://localhost/restapi/public/api/customers/{id}/address

Transfer Parametr:id and return responce customer address info


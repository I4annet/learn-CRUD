--- WHAT ARE YOU DOING HERE?!


ALTER TABLE customer 
ADD CONSTRAINT CHK_PhoneNumber_Length CHECK (LEN(phone_number) BETWEEN 10 AND 15);

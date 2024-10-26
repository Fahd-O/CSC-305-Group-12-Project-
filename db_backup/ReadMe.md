# Database Backup and Restore Instructions

This folder contains the SQL backup file for the project database. Follow the instructions below to restore the database.

## Files

- **MoneyBag_.sql**: Contains the SQL commands to recreate the database structure and data.

## Importing the Database

1. Open your SQL database management tool or command line.
2. Run the following command to import the `.sql` file:

   ```bash
   mysql -u username -p database_name < MoneyBag_.sql

3. Replace username and database_name with your database credentials.

## Requirements

MySQL version: X.X (adjust based on compatibility) <!-- Check back here later -->
Ensure you have the necessary permissions to create and modify tables.

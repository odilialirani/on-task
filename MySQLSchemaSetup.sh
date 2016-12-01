# Make sure to setup user (ontask) on localhost with password (ontask)
# Database "ontask" should be manually created

mysql_config_editor set --login-path=local --host=localhost --user=ontask --password
if [ $(mysql --login-path=local -N -s -e "select count(*) from information_schema.tables where \
        table_schema='ontask' and table_name='ot_users';") -eq 1 ]; then
    echo "Users table already exists"
else
    mysql --login-path=local -e "CREATE TABLE ontask.ot_users 
    (email varchar(50) NOT NULL, 
    username varchar(50), 
    PRIMARY KEY (email)
    );"
fi
if [ $(mysql --login-path=local -N -s -e "select count(*) from information_schema.tables where \
        table_schema='ontask' and table_name='ot_checkpoints';") -eq 1 ]; then
    echo "Checkpoint table already exists."
else
    mysql --login-path=local -e "CREATE TABLE ontask.ot_checkpoints 
    (id int NOT NULL AUTO_INCREMENT,
    parent_id int NOT NULL, 
    name varchar(50) NOT NULL, 
    useremail varchar(50) NOT NULL, 
    PRIMARY KEY (id)
    );"
fi
if [ $(mysql --login-path=local -N -s -e "select count(*) from information_schema.tables where \
        table_schema='ontask' and table_name='ot_tasks';") -eq 1 ]; then
    echo "Task table already exists."
else
    mysql --login-path=local -e "CREATE TABLE ontask.ot_tasks 
    (id int NOT NULL AUTO_INCREMENT,
    deadline date, 
    name varchar(50) NOT NULL, 
    useremail varchar(50) NOT NULL, 
    PRIMARY KEY (id)
    );"
fi
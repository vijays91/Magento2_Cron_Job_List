# Magento2_Cron_Job_List
List all the cron job list

This code help for list all cron job used in the site.

If you used **<config_path>** and **< schedule >** both.
Then **<config_path>** only works.


**< schedule >0 0 0 0 0</ schedule >**

**<config_path>0</config_path>**
Here config_path tag not works.
Schedule tag only works


**Disable Cron :** (set cron for Feb 30)
  <schedule>0 0 30 2 *</schedule>

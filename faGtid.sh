#!/bin/bash
rm -rf gtid.sql
touch gtid.sql
for i in {1..3}
do
        echo -e "SET GTID_NEXT='xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx:$i';\nBEGIN;\nCOMMIT;" >> gtid.sql
done
        echo -e "SET GTID_NEXT='AUTOMATIC';" >> gtid.sql

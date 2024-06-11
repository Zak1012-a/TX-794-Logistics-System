CREATE TABLE  cadet_data (
flight                    varchar(255), --(Alpha-Zulu)
cadet_role                varchar(255), --(Corps Staff/Flight Staff)
cadet_name_first          varchar(255), --(First Name)
cadet_name_last           varchar(255), --(Last Name)
cadet_rank                varchar(255), --(Standard Abrevations)
cadet_id                  int,         --(School ID Number)
cadet_year                int,         --(1-4)
passing                   BOOLEAN,     --(TRUE or FALSE) 
hq_paperwork              BOOLEAN,     --(TRUE or FALSE)
awards                    varchar(255), --(Abrevations for All Ribbons)
cords                     varchar(255), --(Abrevations for All Shoulder Cords)
community_service_hours   int,         --(Number in Hours)
drill_team                BOOLEAN,     --(TRUE or FALSE)
saber_team                BOOLEAN,     --(TRUE or FALSE)
color_guard               BOOLEAN,     --(TRUE or FALSE)
raider_team               BOOLEAN,     --(TRUE or FALSE)
jlab                      BOOLEAN,     --(TRUE or FALSE)
drones_team               BOOLEAN,     --(TRUE or FALSE)
robotics_team             BOOLEAN,     --(TRUE or FALSE)
);

CREATE TABLE issued_gear (
item_issued       varchar(255), --(Item Issued)
item_type         varchar(255), --(Name of Item Issued)
item_sn           int,         --(Serial Number of Item)
cadet_name        varchar(255), --(Last, First)
date_issued       DATE,        --(YYYY-MM-DD)
returned          BOOLEAN,     --(TRUE or FALSE) 
date_returned     DATE,        --(YYYY-MM-DD [0000-00-00 if still being used])
);

CREATE TABLE master_inventory (
item_type       varchar(255), --(Type of Item OCP, UCP, Service)
item_size       int,         --(Size Number on Clothes if N/A = 0)
item_cut        varchar(255), --(Long, Short, Etc if N/A = 0)
item_name       varchar(255), --(Name of Item)
serial_number   int,         --(Serial Number of Item if None = 0)
issued          BOOLEAN,     --(TRUE or FALSE)
date_of_issue   DATE,        --(YYYY-MM-DD if not currently issued put in last date of issue)
issued_to_last  varchar(255), --(Last, First)
date_of_return  DATE,        --(YYYY-MM-DD)
);

CREATE TABLE stock (
-- Blue Uniform Items
service_hat_stock                     int,  --(Number in Stock)
service_hat_issued                    int,  --(Number Issued)
service_hat_total                     int,  --(Number Total)

service_coat_stock                    int,  --(Number in Stock)
service_coat_issued                   int,  --(Number Issued)
service_coat_total                    int,  --(Number Total)

service_shirt_stock                   int,  --(Number in Stock)
service_shirt_issued                  int,  --(Number Issued)
service_shirt_total                   int,  --(Number Total)

service_pants_stock                   int,  --(Number in Stock)
service_pants_issued                  int,  --(Number Issued)
service_pants_total                   int,  --(Number Total)

service_boots_stock                   int,  --(Number in Stock)
service_boots_issued                  int,  --(Number Issued)
service_boots_total                   int,  --(Number Total)

-- OCP Uniform Items
ocp_hat_stock                         int,  --(Number in Stock)
ocp_hat_issued                        int,  --(Number Issued)
ocp_hat_total                         int,  --(Number Total)

ocp_coat_stock                        int,  --(Number in Stock)
ocp_coat_issued                       int,  --(Number Issued)
ocp_coat_total                        int,  --(Number Total)

ocp_blouse_stock                      int,  --(Number in Stock)
ocp_blouse_issued                     int,  --(Number Issued)
ocp_blouse_total                      int,  --(Number Total)

ocp_pants_stock                       int,  --(Number in Stock)
ocp_pants_issued                      int,  --(Number Issued)
ocp_pants_total                       int,  --(Number Total)

ocp_boots_stock                       int,  --(Number in Stock)
ocp_boots_issued                      int,  --(Number Issued)
ocp_boots_total                       int,  --(Number Total)

-- UCP Uniform Items
ucp_hat_stock                         int,  --(Number in Stock)
ucp_hat_issued                        int,  --(Number Issued)
ucp_hat_total                         int,  --(Number Total)

ucp_coat_stock                        int,  --(Number in Stock)
ucp_coat_issued                       int,  --(Number Issued)
ucp_coat_total                        int,  --(Number Total)

ucp_blouse_stock                      int,  --(Number in Stock)
ucp_blouse_issued                     int,  --(Number Issued)
ucp_blouse_total                      int,  --(Number Total)

ucp_pants_stock                       int,  --(Number in Stock)
ucp_pants_issued                      int,  --(Number Issued)
ucp_pants_total                       int,  --(Number Total)

ucp_boots_stock                       int,  --(Number in Stock)
ucp_boots_issued                      int,  --(Number Issued)
ucp_boots_total                       int,  --(Number Total)

-- PT Uniform Items
pt_shirt_stock                        int, --(Number in Stock)
pt_shirt_issued                       int, --(Number Issued)
pt_shirt_total                        int, --(Number Total)

-- Ranks
c_am_rank_stock                       int, --(Number in Stock)
c_am_rank_issued                      int, --(Number Issued)
c_am_rank_total                       int, --(Number Total)

c_am1c_rank_stock                     int, --(Number in Stock)
c_am1c_rank_issued                    int, --(Number Issued)
c_am1c_rank_total                     int, --(Number Total)

c_amsra_rank_stock                    int, --(Number in Stock)
c_amsra_rank_issued                   int, --(Number Issued)
c_amsra_rank_total                    int, --(Number Total)

c_ssgt_rank_stock                     int, --(Number in Stock)
c_ssgt_rank_issued                    int, --(Number Issued)
c_ssgt_rank_total                     int, --(Number Total)

c_tsgt_rank_stock                     int, --(Number in Stock)
c_tsgt_rank_issued                    int, --(Number Issued)
c_tsgt_rank_total                     int, --(Number Total)

c_msgt_rank_stock                     int, --(Number in Stock)
c_msgt_rank_issued                    int, --(Number Issued)
c_msgt_rank_total                     int, --(Number Total)

c_smsgt_rank_stock                    int, --(Number in Stock)
c_smsgt_rank_issued                   int, --(Number Issued)
c_smsgt_rank_total                    int, --(Number Total)

c_cmsgt_rank_stock                    int, --(Number in Stock)
c_cmsgt_rank_issued                   int, --(Number Issued)
c_cmsgt_rank_total                    int, --(Number Total)

c_2lt_rank_stock                      int, --(Number in Stock)
c_2lt_rank_issued                     int, --(Number Issued)
c_2lt_rank_total                      int, --(Number Total)

c_2lt_shoulder_rank_stock             int, --(Number in Stock)
c_2lt_shoulder_rank_issued            int, --(Number Issued)
c_2lt_shoulder_rank_total             int, --(Number Total)

c_1lt_rank_stock                      int, --(Number in Stock)
c_1lt_rank_issued                     int, --(Number Issued)
c_1lt_rank_total                      int, --(Number Total)

c_1lt_shoulder_rank_stock             int, --(Number in Stock)
c_1lt_shoulder_rank_issued            int, --(Number Issued)
c_1lt_shoulder_rank_total             int, --(Number Total)

c_cpt_rank_stock                      int, --(Number in Stock)
c_cpt_rank_issued                     int, --(Number Issued)
c_cpt_rank_total                      int, --(Number Total)

c_cpt_shoulder_rank_stock             int, --(Number in Stock)
c_cpt_shoulder_rank_issued            int, --(Number Issued)
c_cpt_shoulder_rank_total             int, --(Number Total)

c_maj_rank_stock                      int, --(Number in Stock)
c_maj_rank_issued                     int, --(Number Issued)
c_maj_rank_total                      int, --(Number Total)

c_maj_shoulder_rank_stock             int, --(Number in Stock)
c_maj_shoulder_rank_issued            int, --(Number Issued)
c_maj_shoulder_rank_total             int, --(Number Total)

c_ltcol_rank_stock                    int, --(Number in Stock)
c_ltcol_rank_issued                   int, --(Number Issued)
c_ltcol_rank_total                    int, --(Number Total)

c_ltcol_shoulder_rank_stock           int, --(Number in Stock)
c_ltcol_shoulder_rank_issued          int, --(Number Issued)
c_ltcol_shoulder_rank_total           int, --(Number Total)

c_col_rank_stock                      int, --(Number in Stock)
c_col_rank_issued                     int, --(Number Issued)
c_col_rank_total                      int, --(Number Total)

c_col_shoulder_rank_stock             int, --(Number in Stock)
c_col_shoulder_rank_issued            int, --(Number Issued)
c_col_shoulder_rank_total             int, --(Number Total)

--Badges
model_rocketry_badge_stock            int, --(Number in Stock)
model_rocketry_badge_issued           int, --(Number Issued)
model_rocketry_badge_total            int, --(Number Total)


CREATE TABLE issued_gear (
item_issued       varchar(80), --(Item Issued)
item_type         varchar(80), --(Name of Item Issued)
item_sn           int,         --(Serial Number of Item)
cadet_name        varchar(80), --(Last, First)
date_issued       DATE,        --(YYYY-MM-DD)
returned          BOOLEAN,     --(TRUE or FALSE) 
date_returned     DATE,        --(YYYY-MM-DD [0000-00-00 if still being used])
);

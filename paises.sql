ALTER TABLE SYSTEM.PAISES
 DROP PRIMARY KEY CASCADE;
DROP TABLE SYSTEM.PAISES CASCADE CONSTRAINTS;

CREATE TABLE SYSTEM.PAISES
(
  ID_PAIS   INTEGER                             NOT NULL,
  NOMBRE    VARCHAR2(100 BYTE),
  NACIONAL  CHAR(1 BYTE)
)
TABLESPACE SYSTEM
PCTUSED    40
PCTFREE    10
INITRANS   1
MAXTRANS   255
STORAGE    (
            INITIAL          64K
            NEXT             1M
            MINEXTENTS       1
            MAXEXTENTS       UNLIMITED
            PCTINCREASE      0
            FREELISTS        1
            FREELIST GROUPS  1
            BUFFER_POOL      DEFAULT
           )
LOGGING 
NOCOMPRESS 
NOCACHE
NOPARALLEL
MONITORING;


ALTER TABLE SYSTEM.PAISES ADD (
  PRIMARY KEY
 (ID_PAIS)
    USING INDEX 
    TABLESPACE SYSTEM
    PCTFREE    10
    INITRANS   2
    MAXTRANS   255
    STORAGE    (
                INITIAL          64K
                NEXT             1M
                MINEXTENTS       1
                MAXEXTENTS       UNLIMITED
                PCTINCREASE      0
                FREELISTS        1
                FREELIST GROUPS  1
               ));


CREATE TABLE DATOS_PROVEDOR
(
  ID                  INTEGER                   NOT NULL,
  ID_PREGUNTAS        INTEGER,  
  NOMBRE_PERSONA_F_M  VARCHAR2(150 BYTE),
  ID_FISCAL           INTEGER,
  COREO               VARCHAR2(100 BYTE),
  TELEFONO            VARCHAR2(100 BYTE),
  ID_BANCO            INTEGER,
  SUCURSAL            VARCHAR2(100 BYTE),
  CUENTA_COR          VARCHAR2(100 BYTE),
  CUENTA_LAR          VARCHAR2(100 BYTE),
  ID_FISCAL_2         INTEGER,
  ID_TPO_CTA          INTEGER,
  NOMBRE_STA_CUENTA   VARCHAR2(100 BYTE),
  CONVENIO            VARCHAR2(100 BYTE),
  REFERENCIA          VARCHAR2(100 BYTE),
  NOMBRE_REFE         VARCHAR2(100 BYTE),
  ABA_REFE            VARCHAR2(100 BYTE),
  SWIN_REFE           VARCHAR2(100 BYTE)
)

ALTER TABLE DATOS_PROOVEDOR ADD (
  CONSTRAINT pro_pk_4 PRIMARY KEY (ID));

CREATE SEQUENCE dept_seq_p_4;

CREATE OR REPLACE TRIGGER dept_bir_p_4
BEFORE INSERT ON DATOS_PROOVEDOR
FOR EACH ROW

BEGIN
  SELECT dept_seq_p_4.NEXTVAL
  INTO   :new.id
  FROM   dual;
END;
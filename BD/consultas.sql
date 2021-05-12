
CREATE VIEW vw_personas_lista AS
SELECT p.id, p.codigo, p.nombres, p.apellidos, p.dni, p.celular, p.correo, s.sexo, b.beca, c.carrera FROM tbpersonas AS p 
INNER JOIN tbsexo AS s INNER JOIN tbbeca AS b INNER JOIN tbcarreras AS c ON p.idsexo = s.id AND p.idbeca = b.id AND p.idcarrera = c.id
ORDER BY p.id ASC;
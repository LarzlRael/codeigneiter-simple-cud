
DROP TABLE IF EXISTS `mascota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mascota` (
  `idmascota` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_mascota` varchar(75) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmascota`),
  KEY `idusuario` (`idusuario`),
  CONSTRAINT `mascota_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mascota`
--

LOCK TABLES `mascota` WRITE;
/*!40000 ALTER TABLE `mascota` DISABLE KEYS */;
INSERT INTO `mascota` VALUES (2,'lindo','gato',2),(3,'peque','con el dueño',3);
/*!40000 ALTER TABLE `mascota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) DEFAULT NULL,
  `firstname` varchar(75) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `contacto` varchar(50) DEFAULT NULL,
  `bio` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (2,'rey','rey','1233-12-12','232','32'),(3,'juan','mamani','1990-02-01','buen tipo','vive solo con su mascota');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'simple_crud'
--

--
-- Dumping routines for database 'simple_crud'
--
/*!50003 DROP PROCEDURE IF EXISTS `agregar_usuario_mascota` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`larz`@`localhost` PROCEDURE `agregar_usuario_mascota`(
IN _firstname varchar(75),
IN _lastname varchar(75),
IN _birthdate date,
IN _contacto varchar(75),
IN _bio varchar(75),
IN _nombre_mascota varchar(75),
IN _direccion varchar(75)
)
BEGIN

insert into usuarios(firstname,lastname,birthdate,contacto,bio)
values(_firstname,_lastname,_birthdate,_contacto,_bio);

SET @idusuario = (select last_insert_id());

insert into mascota(nombre_mascota,direccion,idusuario) values(_nombre_mascota,_direccion,@idusuario);

END ;;
DELIMITER ;

<?xml version="1.0" ?>
<xsl:transform xmlns:xsl="http://www.w3.org/1999/XSL/Transform"	version="1.0">
<xsl:template match="*">
		<xsl:apply-templates/>
	</xsl:template>
	<xsl:template match="text()">
		<xsl:apply-templates/>
	</xsl:template>
	<xsl:template match="/">
		<html>
			<head>
				<title>Section</title>
			</head>
			<body>
				<!--1. Subject title-->
				<h2>Subject</h2>
				<xsl:apply-templates select="/database/quiz/section/subject[text()='Division']"/>
				
				<!--2. information-->
				<h2>Information</h2>
				<xsl:apply-templates select="/database/quiz/section/subject[text()='Division'/../info"/>
				<h4></h4>
				
				<!--3. Notes-->
				<xsl:apply-templates select="/database/quiz/section/subject[text()='Division'/../notes"/>
				
			</body>
		</html>
	</xsl:template>
	
	<!--1.subject title-->
	<xsl:template match="text">
		<xsl:value-of select="."/>
	</xsl:template>
	<!--2. information-->
	<xsl:template match="info">
		<xsl:value-of select="."/>
	</xsl:template>
	
	<!--<xsl:template match="info">
		<a href="http://www.mindbodygreen.com/0-10152/5-hydration-facts-you-need-to-know-but-probably-dont.html">
			<xsl:value-of select="."/>
		</a>
	</xsl:template>-->
	
	<!--3. Notes-->
	
	<xsl:template match="notes">
		<a href="QuizDivision.php">
			<xsl:value-of select="."/>
		</a>
	</xsl:template>
	
	
	
</xsl:transform>
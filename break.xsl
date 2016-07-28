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
				<title>Facts</title>
			</head>
			<body>
				<!--1. Section titles-->
				<h2>Section</h2>
				<xsl:apply-templates select="/database/section/break/title"/>
				
				<!--2. information-->
				<h2>Facts</h2>
				<xsl:apply-templates select="/database/section/break/info"/>
				<h4></h4>
				<xsl:apply-templates select="/database/section/break/source"/>
				<h4></h4>
				<xsl:apply-templates select="/database/section/break/image"/>
				
			</body>
		</html>
	</xsl:template>
	
	<!--1.section title-->
	<xsl:template match="title">
		<xsl:value-of select="."/>
	</xsl:template>
	<!--2. information-->
	<xsl:template match="info">
		<xsl:value-of select="."/>
	</xsl:template>
	
	<xsl:template match="source">
		<a href="http://www.onlineschools.org/science-of-study-breaks/">
			<xsl:value-of select="."/>
		</a>
	</xsl:template>
	
	<xsl:template match="image">
		<img class="xslimage" src="images/Break.png"/>
			<xsl:value-of select="."/>
	</xsl:template>
	
</xsl:transform>
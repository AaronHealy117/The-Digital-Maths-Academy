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
			    <title>About us</title>
			</head>
			<body>
				<!--1. Secure-->
				<xsl:apply-templates select="/database/section/secure"/>

			</body>
		</html>
	</xsl:template>

	<!--1.Secure-->
	<xsl:template match="secure">
		<xsl:value-of select="."/>
	</xsl:template>

	
	
	
</xsl:transform>
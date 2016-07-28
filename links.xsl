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
				<!--1. Notes-->
				<h2>Notes</h2>
				<xsl:apply-templates select="//maths/notes"/>
				
				<!--2. websites-->
				<h2>Websites</h2>
				<xsl:apply-templates select="//maths/website"/>
				<h4></h4>
				<xsl:apply-templates select="//maths/image"/>
				
				<!--3. Resources-->
				<h2>Resources</h2>
				<xsl:apply-templates select="//maths/resources"/>
			</body>
		</html>
	</xsl:template>
	
	<!--1.Notes-->
	<xsl:template match="notes">
		<a href="https://ie.ixl.com/">
			<xsl:value-of select="."/>
		</a>
	</xsl:template>
	<!--2. Websites-->
	<xsl:template match="website">
		<a href="http://www.classmaths.com/">
			<xsl:value-of select="."/>
		</a>
	</xsl:template>
	
	<!--3. Resources-->
	<xsl:template match="resources">
		<a href="http://www.schooldays.ie/articles/websites-to-help-the-kids-out-with-their-maths">
			<xsl:value-of select="."/>
		</a>
	</xsl:template>
	
	<xsl:template match="image">
		<img class="xslimage" src="images/"/>
			<xsl:value-of select="."/>
	</xsl:template>
	
</xsl:transform>
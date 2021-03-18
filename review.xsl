<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0" xmlns:msxsl="urn:schemas-microsoft-com:xslt">
  <xsl:template match="/">
  
    <html>
            <head>
                <title>Shoes</title>
                <meta charset="utf-8" />
					<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
					<!-- Bootstrap CSS -->
					<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
					<!-- JavaScript Bootstrap  -->

					<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
					</script>
                 
                 </head>
                 <h2 style="text-align: center;padding-top: 50px;">Review</h2>
                  <table  class="" border="1" align="center" style="text-align:center;font-size:18px;">
                    <thead>
                        <tr bgcolor="#581845">
                            <th style="color:#a7b1b8;">Shoes_ID</th>
                            <th style="color:#a7b1b8;">Review_ID</th>
                            <th style="color:#a7b1b8;">Review_Note</th>
                            <th style="color:#a7b1b8;">date</th>
                            <th style="color:#a7b1b8;">Author</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                            <xsl:for-each select="Reviews/Review">
                                <tr>
                                <td><xsl:value-of select="shoe_id"/></td>
                                <td><xsl:value-of select="review_id"/></td>
                                 <td><xsl:value-of select="review_note"/></td>
                                <td><xsl:value-of select="date"/></td>
                                <td><xsl:value-of select="author"/></td>
                                
                               
                                
                                
                                
                                </tr>
                      </xsl:for-each>
                      </tbody>
                      
                </table>
                </html>
                </xsl:template>      
                               
</xsl:stylesheet>


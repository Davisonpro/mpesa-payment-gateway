# Security Policy

## Supported Versions

We release patches for security vulnerabilities. The following versions are currently supported with security updates:

| Version | Supported          |
| ------- | ------------------ |
| 2.0.x   | :white_check_mark: |
| < 2.0   | :x:                |

## Security Features

### Data Protection

- **Encrypted Credentials**: All API credentials are stored securely and never logged
- **Phone Number Masking**: Phone numbers are masked in debug logs (e.g., 2547****5678)
- **Secure Token Storage**: Access tokens are cached with WordPress transients (HTTPS only)
- **No Plain Text Storage**: Sensitive data is never stored in plain text

### Input Validation

- **Sanitization**: All user inputs are sanitized before processing
- **Output Escaping**: All outputs are properly escaped
- **Type Checking**: Strict type declarations (PHP 7.4+)
- **Phone Number Validation**: Regex validation for Kenyan phone numbers

### API Security

- **Webhook Signature Validation**: All M-Pesa callbacks are validated
- **HMAC Verification**: Cryptographic verification of webhook authenticity
- **SSL/TLS Required**: HTTPS is required for production
- **Rate Limiting**: API calls are optimized to prevent abuse

### Database Security

- **Prepared Statements**: All database queries use prepared statements
- **HPOS Compatible**: Works with WooCommerce High-Performance Order Storage
- **No Direct Queries**: Uses WordPress/WooCommerce APIs only
- **Data Sanitization**: All data is sanitized before database storage

### WordPress Security

- **Nonce Verification**: CSRF protection on all forms and AJAX requests
- **Capability Checks**: Proper permission checks for admin actions
- **Escape Output**: All output properly escaped (esc_html, esc_attr, etc.)
- **Direct Access Prevention**: Files check for ABSPATH constant

## Reporting a Vulnerability

**Please DO NOT report security vulnerabilities through public GitHub issues.**

Instead, please report them via email to:

**davis@davisonpro.dev**

### What to Include

Please include the following information:

1. **Type of vulnerability** (XSS, CSRF, SQL Injection, etc.)
2. **Full path and location** of the affected source file(s)
3. **Step-by-step instructions** to reproduce the issue
4. **Proof of concept** or exploit code (if possible)
5. **Impact assessment** (what an attacker could do)
6. **Suggested fix** (if you have one)

### Response Timeline

- **Initial Response**: Within 48 hours
- **Confirmation**: Within 5 business days
- **Fix Timeline**: Depends on severity
  - Critical: 1-3 days
  - High: 1-2 weeks
  - Medium: 2-4 weeks
  - Low: Next scheduled release

### Disclosure Policy

- **Coordinated Disclosure**: We follow responsible disclosure practices
- **Credit**: Security researchers will be credited (unless they prefer anonymity)
- **Public Disclosure**: After patch is released and users have time to update

## Security Best Practices for Users

### Production Environment

1. **Use HTTPS**: Always use SSL/TLS certificates
2. **Keep Updated**: Update to the latest version immediately
3. **Sandbox First**: Test in sandbox before going live
4. **Strong Credentials**: Use strong API keys from Safaricom
5. **Limit Access**: Restrict admin access to trusted users only

### API Credentials

1. **Secure Storage**: Never commit credentials to version control
2. **Environment Variables**: Use environment variables when possible
3. **Regular Rotation**: Rotate API keys periodically
4. **Monitor Usage**: Check Daraja portal for suspicious activity

### Debug Mode

1. **Disable in Production**: Never enable debug mode on live sites
2. **Log Protection**: Protect log files with .htaccess
3. **Regular Cleanup**: Delete old log files regularly
4. **Sensitive Data**: Debug logs mask phone numbers and credentials

### Server Configuration

1. **PHP Version**: Use PHP 7.4+ (8.0+ recommended)
2. **WordPress Version**: Keep WordPress updated
3. **WooCommerce Version**: Keep WooCommerce updated
4. **Firewall**: Use a web application firewall (WAF)
5. **File Permissions**: Proper file permissions (644 for files, 755 for directories)

## Security Audits

We perform regular security audits:

- **Code Reviews**: Every commit is reviewed
- **Static Analysis**: PHPStan level 8
- **Coding Standards**: WordPress Coding Standards
- **Dependency Scanning**: Regular dependency updates
- **Third-party Audits**: Welcome security researcher reviews

## Known Issues

Currently, there are no known security issues.

## Security Updates

Security updates are released as needed and announced via:

- GitHub Security Advisories
- WordPress.org plugin changelog
- Email to reported vulnerability reporters

## Compliance

This plugin follows:

- **OWASP Top 10**: Protection against common vulnerabilities
- **WordPress Security Standards**: Official WordPress security guidelines
- **PCI DSS Considerations**: Secure payment processing practices
- **GDPR**: Minimal data collection, phone number masking

## Questions?

If you have security questions (not vulnerabilities), you can:

- Open a GitHub Discussion
- Email: davis@davisonpro.dev

---

**Last Updated**: November 2024  
**Version**: 2.0.0


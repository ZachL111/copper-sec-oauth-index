# Copper Sec Oauth Index Walkthrough

This note is the quickest way to read the extra review model in `copper-sec-oauth-index`.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 126 | watch |
| stress | claim drift | 138 | watch |
| edge | replay exposure | 239 | ship |
| recovery | policy width | 265 | ship |
| stale | trust boundary | 224 | ship |

Start with `recovery` and `baseline`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

The useful comparison is `policy width` against `trust boundary`, not the raw score alone.

# copper-sec-oauth-index

`copper-sec-oauth-index` explores security tooling with a small PHP codebase and local fixtures. The technical goal is to implement a PHP security tooling project for oauth resource planning, using capacity fixtures and allocation and spill reports.

## Why This Exists

The point is to make a small domain rule concrete enough that a reader can change it and immediately see what broke.

## Copper Sec Oauth Index Review Notes

For a quick review, compare `policy width` with `trust boundary` before reading the middle cases.

## Capabilities

- `fixtures/domain_review.csv` adds cases for trust boundary and claim drift.
- `metadata/domain-review.json` records the same cases in structured form.
- `config/review-profile.json` captures the read order and the two review questions.
- `examples/copper-sec-oauth-walkthrough.md` walks through the case spread.
- The PHP code includes a review path for `policy width` and `trust boundary`.
- `docs/field-notes.md` explains the strongest and weakest cases.

## Implementation Shape

The fixture data drives the tests. The code stays thin, while `metadata/domain-review.json` and `config/review-profile.json` explain what each case is meant to protect.

The added PHP path is deliberately direct, with fixtures doing most of the explaining.

## Local Usage

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

## Verification

That command is also the regression path. It verifies the domain cases and catches mismatches between the CSV, metadata, and code.

## Roadmap

The fixture set is small enough to audit by hand. The next useful expansion is malformed input coverage, not extra surface area.

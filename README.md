# vista-sec-webhook-field

`vista-sec-webhook-field` keeps a focused PHP implementation around security tooling. The project goal is to implement a PHP security tooling project for webhook format conversion, using round-trip fixtures and lossless normalization checks.

## Why I Keep It Small

The project exists to keep a narrow engineering decision visible and testable. For this repo, that decision is how trust boundary and replay exposure should influence a review result.

## Vista Sec Webhook Field Review Notes

`recovery` and `baseline` are the cases worth reading first. They show the optimistic and cautious ends of the fixture.

## Included Behavior

- `fixtures/domain_review.csv` adds cases for trust boundary and claim drift.
- `metadata/domain-review.json` records the same cases in structured form.
- `config/review-profile.json` captures the read order and the two review questions.
- `examples/vista-sec-webhook-walkthrough.md` walks through the case spread.
- The PHP code includes a review path for `policy width` and `trust boundary`.
- `docs/field-notes.md` explains the strongest and weakest cases.

## Internal Model

The implementation keeps the scoring rule plain: reward signal and confidence, preserve slack, penalize drag, then classify the result into a review lane.

The added PHP path is deliberately direct, with fixtures doing most of the explaining.

## Try It Locally

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

## Validation

The verifier is intentionally local. It should fail if the fixture score math, lane assignment, or language-specific test drifts.

## Scope

No external service is required. A deeper version would add more negative cases and a clearer boundary around invalid input.
